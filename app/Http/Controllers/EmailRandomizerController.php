<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

use App\Models\User;
use Dotenv\Validator;
use App\Models\EmailRandomizer;
use App\Mail\Email;
use App\Notifications\EmailNotif;



class EmailRandomizerController extends Controller
{
    use Notifiable;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

//query to get all emails in the database
    public function getAllMails()
    {
        $user = Auth::user();
        $emails = DB::table('users')->select('id','email')->get();
        return response()->json($emails);
    }


    //query to get all selected emails and randomize and then notify
    public function selectedMails(Request $request)
    {
        $user = Auth::user();
        $emails =  EmailRandomizer::randomizedEmails($request);
        $randomizedEmail = EmailRandomizer::create([
            "user_id" => $user->id,
            "user_name" => $user->name,
            "emails" => json_encode($emails)
            ]);

        $randomizedEmail->emails = json_decode($randomizedEmail->emails);
        foreach ($randomizedEmail->emails as $email) {
            $user = User::where('email',$email)->first();
            $user->notify(new EmailNotif());
        }

        return response()->json($randomizedEmail);
    }




}
