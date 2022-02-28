<?php

namespace App\Http\Controllers\Library;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //only for test purpose during development
    private static $devDatas = [
        "connectedUserId" => null, // 1,
        "connectedUserGroup" =>  null,// "admin"
        "connectedUserTypePers" =>  null,// "admin"
    ];

    public static function setConnectedUserData(int $idPers,string $emailPers, string $typePers, array $typePerss, int $idSte, string $nomPers, string $prenPers)
    {
        Session::regenerate();

        Session::put([
            'connectedUserId'=> $idPers,
            'connectedUserEmail' => $emailPers,
            'connectedUserTypePers'=> $typePers,
            'typePerss'=> $typePerss,

            'connectedUserSteId'=> $idSte,
            'nomPers'=> $nomPers,
            'prenPers'=> $prenPers,
        ]);


    }

    public static function setConnectedUserAvatar(? string $avatar = null)
	{

		if(isset($avatar))
		{
			$uploadedFilesFolder = ConfigController::getApsedCoreAPIUploadedFilesFolder();
			Session::put("avatar",$uploadedFilesFolder."/".$avatar);
		}
		else
			Session::put("avatar", asset("myFiles/images/default-user.png") );

	}

    public static function deleteConnectedUserData()
    {
        Session::forget('connectedUserId');
        Session::forget('connectedUserEmail');
        Session::forget('typePers');

        Session::forget('connectedUserSteId');
        Session::forget('nomPers');
        Session::forget('prenPers');

        Session::forget('avatar');

        //vider les anciennes valeurs de session !!
        Session::regenerate();


    }

    public static function getConnectedUserId() : int
    {
        return Session::get('connectedUserId', self::$devDatas["connectedUserId"] );
    }

    public static function getConnectedUserLogin() : string
    {
        return Session::get('connectedUserLogin');
    }

    public static function getConnectedUserSteId() : string
    {
        return Session::get('connectedUserSteId');
    }


    public static function getConnectedUserGroup() : string
    {
        return Session::get('connectedUserGroup', self::$devDatas["connectedUserGroup"] );
    }

    public static function getConnectedUserTypePers() : string
    {
        return Session::get('connectedUserTypePers', self::$devDatas["connectedUserTypePers"] );
    }


}
