<?php

namespace App\Http\Controllers\Library;

use App\Http\Controllers\Controller;
use App\Mail\NotificationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    //envoyer un mail à partir du site
    public static function sendMail(Request $request,string $objet , string $emailDestinataire, string $msgBody, ? string $attachedFilePath = null, ? string $attachedFileNameWithExt = null, ? string $fileExt = null)
    {
        if(env("APP_ENV","production")=="production" && env("APP_EMAIL_IS_CONFIGURED",true)==true)     //
        {

            Mail::to($emailDestinataire)
                ->send(new NotificationMail($objet,$msgBody,$attachedFilePath,$attachedFileNameWithExt,$fileExt));


        }
    }

}
