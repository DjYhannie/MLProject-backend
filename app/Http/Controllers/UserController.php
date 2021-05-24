<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{


//code for log in with validation
    function login(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'password' => 'required',
            'email' => 'required|email'
        ]);

        if ($validator ->fails()) {
            return response()->json(['status_code'=>400, 'message'=>'Bad Request']);

        }else
        {
            $user= User::where('email', $request->email)->first();

            if (!$user || !Hash::check($request->password, $user->password)) {
                return response([
                    'message' => ['These credentials do not match our records.']
                ], 404);
            }
            
            $token = $user->createToken('my-app-token')->plainTextToken;
            $response = [
                'user' => $user,
                'message' => 'Login Succesfully!',
                'token' => $token,
            ];
            return response($response, 201);

        }

    }


    //code for user logout
    public function logout(User $id)
    {
        $user = Auth::user();
        $user->currentAccessToken()->delete();

        return response()->json([
            'status_code' => 200,
            'message' => 'Token deleted successfully!'
        ]);
    }


    //code to get all the users
    public function getUsers()
    {
        $user = Auth::user();
        $users = User::all();
        return response()->json($users);
    }
}

