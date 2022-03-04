<?php

namespace App\Http\Controllers\FrontOffice;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Library\MailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class FrontOfficeController extends Controller
{
    public function index(Request $request)
    {
        //return redirect()->route("login");
        return view("myViews.frontOffice.index");
    }

    public function evisa(Request $request)
    {
        return view("myViews.frontOffice.evisa");
    }

    public function epasseport(Request $request)
    {
        return view("myViews.frontOffice.epasseport");
    }

    public function equipe(Request $request)
    {
        return view("myViews.frontOffice.equipe");
    }

    public function contacts(Request $request)
    {

        if($request->isMethod("post"))
        {
            $_validator = Validator::make($request->all(),[
                "nomPren" => "required",
                "email" => "required|email",
                "objet" => "required",
                "message" => "required",
            ]);

            if($_validator->fails())
            {

                if($request->ajax())
                {
                    return response()->json([
                        "status" => "erreurValidation",
                        "data" => [

                            "primaryData" => [
                                "msg" => $_validator->errors()
                            ],
                            "secondaryData" =>[
                                "msg" => $_validator->errors()->first(),
                            ]
                        ]
                    ]);
                }

                return redirect()->back()->withErrors($_validator->errors())->withInput();
            }

            $formData = $request->only(["nomPren","email","objet","message"]);

            $succesTraitement = false;
            $messageErreur = "";
            try
            {
                //DB::beginTransaction();
                    //$appClt = env("APP_CLT");
                    $appName = env("APP_NAME");
                    $objet = $formData["objet"]; //"Demande de démo pour le logiciel {$appName} : ";
                    $emailDestinataire = env("APP_CLT_MAIL") ;
                    $msgBody = "
                            <h3>Emetteur</h3>
                            <p>Nom : {$formData["nomPren"]} </p>
                            <p>Email : {$formData["email"]} </p>
                            <p>Objet : {$formData["objet"]} </p>
                            <hr/>
                            {$formData["message"]}
                        ";


                    //mail envoyé au destinataire
                    MailController::sendMail($request,$objet,$emailDestinataire,$msgBody);



                    $emailEmetteur = $formData["email"];
                    if(isset($emailEmetteur) && filter_var($emailEmetteur,FILTER_VALIDATE_EMAIL ) ) //envoyer un mail à l'émetteur
                    {
                        $emailDestinataire = $emailEmetteur ;
                        $objet = "Accusé de réception - {$formData["objet"]}";
                        $msgBody = "
                                            <p> 
                                                Bonjour Mr/Mme {$formData['nomPren']}. Nous avons bien reçu votre message. Nous vous reviendrons très bientôt.
                                            </p>
                                            <p>Passez une très bonne journée.</p>
                                            
                                        ";

                        MailController::sendMail($request,$objet,$emailDestinataire,$msgBody);

                    }

                //DB::commit();
                $succesTraitement = true;
            }
            catch (\Throwable $t)
            {
                // Executed only in PHP 7, will not match in PHP 5
                //DB::rollBack();
                $messageErreur = $t->getMessage();
                Log::error($t);
            }
            catch(\Exception $e)
            {
                //DB::rollBack();
                $messageErreur = $e->getMessage();
                Log::error($e);
            }


            if($succesTraitement)
            {
                $data = [
                    "status" => "succesTraitement",
                    "data" => [
                        "primaryData" => [
                            "msg" => "Message envoyé avec succès. Nous vous reviendrons très bientôt.",

                        ],
                        "secondaryData" =>[

                        ]
                    ]
                ];

                if($request->ajax())
                    return response()->json($data);

                return redirect()->back()->with($data);
            }
            else
            {
                $data = [
                    "status" => "echecTraitement",
                    "data" => [
                        "primaryData" => [
                            "msg" => $messageErreur
                        ],
                        "secondaryData" => [

                        ]
                    ]
                ];

                if($request->ajax())
                    return response()->json($data);

                return redirect()->back()->with($data)->withInput();
            }



        }



        return view("myViews.frontOffice.contacts");
    }

}
