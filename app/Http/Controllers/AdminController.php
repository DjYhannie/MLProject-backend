<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use App\Models\EmailRandomizer;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    //query to select emails and randomize(Admin side)
    public function adminSelectedMails(Request $request)
    {
        $user = Auth::user();
        $emails =  EmailRandomizer::randomizedEmails($request);
        $randomizedEmail = EmailRandomizer::create([
            "user_id" => $user->id,
            "emails" => json_encode($emails)
            ]);

        $randomizedEmail->emails = json_decode($randomizedEmail->emails);
        return response()->json($randomizedEmail);
    }

    //query to get the responses of the selected emails
    //to give Evalutation
    public function getRandomizedEmails()
    {
        $user = Auth::user();
        $responses = DB::table('email_randomizers')->get();
        return response()->json($responses);
    }

    //query to get the datas of the responses of the Evaluation
    public function getEvaluationResponse()
    {
        $user = Auth::user();
        $result = DB::table('forms')->get();
        return response()->json($result);
    }

    

}
