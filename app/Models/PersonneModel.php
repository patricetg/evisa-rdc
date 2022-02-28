<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection as SupportCollection;

class PersonneModel extends Model
{
    protected $table = "Personne";
    protected $primaryKey = "idPers";
    protected $fillable = ["nomPers","prenPers","emailPers","passPers","imgPers","postePers","typePers","signature","signaturePO","useSignaturePO","pers_deletedAt"];
    //public $timestamps = false;
    //public $incrementing = false;
    const CREATED_AT = "pers_createdAt";
    const UPDATED_AT = "pers_updatedAt";

    private static $typePerss = [
        "admin" => [
            "front" => "Admin",
            "back" => "admin"
        ],
        "personnel" => [
            "front" => "Personnel",
            "back" => "personnel"
        ],
    ];

    public static function add(string $nomPers,string $prenPers, string $emailPers,string $passPers, string $postePers, string $typePers, bool $useSignaturePO = false) : self
    {
        return self::create([
            "nomPers" => $nomPers,
            "prenPers" => $prenPers,
            "emailPers" => $emailPers,
            "passPers" => $passPers,
            "postePers" => $postePers,
            "typePers" => $typePers,
            "useSignaturePO" => $useSignaturePO,
        ]);
    }


    public static function modify(int $idPers,string $nomPers,string $prenPers, string $emailPers, string $postePers) : void
    {
        self::where("idPers",$idPers)
            ->update([
                "nomPers" => $nomPers,
                "prenPers" => $prenPers,
                "emailPers" => $emailPers,
                "postePers" => $postePers,
            ]);
    }


    public static function updatePwd(string $emailPers, string $pwd)
    {
        self::where("emailPers",$emailPers)
                ->whereNull("pers_deletedAt")
                ->update([
                    "passPers" => $pwd
                ]);
    }

    public static function reviewSignatureData(int $idPers, string $signature)
    {
        self::where("idPers",$idPers)
                ->update([
                    "signature" => $signature
                ]);
    }


    public static function reviewSignaturePOData(int $idPers, string $signaturePO)
    {
        self::where("idPers",$idPers)
                ->update([
                    "signaturePO" => $signaturePO
                ]);
    }

    public static function reviewImgPersData(int $idPers, string $imgPers) : void
    {
        self::where("idPers",$idPers)
                ->update([
                    "imgPers" => $imgPers
                ]);
    }

    public static function chooseSignatureToUse(int $idPers, bool $useSignaturePO)
    {
        self::where("idPers",$idPers)
                ->update([
                    "useSignaturePO" => $useSignaturePO
                ]);
    }


    public static function personnes() : Collection
    {
        return self::orderBy("nomPers","asc")
                    ->orderBy("prenPers","asc")
                    ->get();
    }

    public static function personne(?int $idPers = null, ? string $email = null) : ? \StdClass
    {
        $_query = DB::table("Personne as p");

        if(isset($idPers))
            $_query = $_query->where("p.idPers",$idPers);

        if(isset($email))
            $_query = $_query->where("p.emailPers",$email);

        return $_query->first();
    }


    public static function remove(int $idPers)
    {
        self::where("idPers",$idPers)
            ->whereNull("pers_deletedAt")
            ->update([
                "pers_deletedAt" => DB::raw("now()")
            ]);
    }

    public static function restore(int $idPers)
    {
        self::where("idPers",$idPers)
            ->whereNotNull("pers_deletedAt")
            ->update([
                "pers_deletedAt" => null
            ]);
    }

    public static function updateCredentials(int $idPers, string $email, string $pwd)
    {
        self::where("idPers",$idPers)
                ->whereNull("pers_deletedAt")
                ->update([
                    "emailPers" => $email,
                    "passPers" => $pwd
                ]);
    }


    /**
     * @return array
     */
    public static function getTypePerss(): array
    {
        return self::$typePerss;
    }


}
