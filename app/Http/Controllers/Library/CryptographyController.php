<?php

namespace App\Http\Controllers\Library;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CryptographyController extends Controller
{

    /*==============================================*/
    //hash la donnée passée en paramètre
    public static function hashText(string $text) : string
    {
        return Hash::make($text);
    }

    //vérifie si la donnée passée en paramètre et le hash correspondent : renvoie true si oui, false si non
    public static function plainTextMatchHashedData(string $plainText, string $hashedData) : bool
    {
        if( Hash::check($plainText, $hashedData) )
        {
            return true;
        }

        return false;
    }


}
