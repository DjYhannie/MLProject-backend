<?php

namespace App\Http\Controllers;

use App\Models\Forms;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Notifications\Notifiable;
use Symfony\Component\VarDumper\Cloner\Data;

class FormsController extends Controller
{
    use Notifiable;


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function addDataForms(Request $request)
    {
        $user = Auth::user();
        $validator = Validator::make($request->all(),[
            'question1' => 'required',
            'question2' => 'required',
            'question3' => 'required',
            'category1' => 'required',
            'category2' => 'required',
            'category3' => 'required',
            'category4' => 'required',
            'category5' => 'required',
            'category6' => 'required',
            'category7' => 'required',
            'category8' => 'required',
            'category9' => 'required',
            'category10' => 'required'
        ]);

        if ($validator ->fails()) {
            return response()->json(['status_code'=>400, 'message'=>'Bad Request', $validator->errors()]);
        }

        $response = [];
        try{
            // $data = Forms::create($request->all());
            $data = $request->all();
            $data['user_id'] = $user->id;
            $data['user_name'] =  $user->name;
            $datas = Forms::create($data);
            $response['status_code'] = 200;
            $response['message'] = 'success';
            $response['data'] = $data;
        } catch (\Exception $e) {
            $response['status_code'] = 400;
            $response['message'] = $e->getMessage();
            $response['data'] = null;
        }

        return response($response);
    }
}

