<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocieteModel extends Model
{
    protected $table = "Societe";
    protected $primaryKey = "idSte";
    protected $fillable = ["codeProtectionFichier","logo","tampon","certificat"];
    public $timestamps = false;
    //public $incrementing = false;
    //const CREATED_AT = "fe_createdAt";
   // const UPDATED_AT = "fe_updatedAt";

    public static function societe(int $idSte) : self
    {
        return self::where("idSte",$idSte)
                  ->firstOrFail();
    }

    public static function updateCodeProtectionFichier(int $idSte, string $codeProtectionFichier) : void
    {
        self::where("idSte",$idSte)
            ->update(compact("codeProtectionFichier"));
    }

    public static function reviewLogoData(int $idSte, string $logo) : void
    {
        self::where("idSte",$idSte)
            ->update(compact("logo"));
    }

    public static function reviewTamponData(int $idSte, string $tampon) : void
    {
        self::where("idSte",$idSte)
            ->update(compact("tampon"));
    }

    public static function reviewCertificatData(int $idSte, string $certificat) : void
    {
        self::where("idSte",$idSte)
            ->update(compact("certificat"));
    }


}
