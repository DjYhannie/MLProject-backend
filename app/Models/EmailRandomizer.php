<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailRandomizer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'user_name',
        'emails'
    ];

    protected $cast = [
        "emails" => "array",
    ];

    protected $table = "email_randomizers";


    /**
     * Randomized emails
     * @param request
     * @return array
     */

    public static function randomizedEmails($request)
    {
        $rmDef = 2;
        $emails = $request->emails;
        shuffle($emails);
        if(count($emails)>5) {
            $rmDef += ((count($emails) - 5)>=2) ? 1 : count($emails) - 5;
        }
        $selectedEmails = array_slice($emails, $rmDef);
        return $selectedEmails;
    }
}
