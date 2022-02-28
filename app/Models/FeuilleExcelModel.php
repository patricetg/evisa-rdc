<?php

namespace App\Models;

use App\Http\Controllers\Library\ConfigController;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FeuilleExcelModel extends Model
{
    protected $table = "FeuilleExcel";
    protected $primaryKey = "idFE";
    protected $fillable = ["idMoule","indiceFE","plageFE","pageFE","orientationFE","cacheterFE","signerFE",
		"signatureXFE","signatureYFE","tamponXFE","tamponYFE",];
    //public $timestamps = false;
    //public $incrementing = false;
    const CREATED_AT = "fe_createdAt";
    const UPDATED_AT = "fe_updatedAt";

    protected $perPage = 15;


    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->perPage = ConfigController::getPaginatorMaxDataPerPage();
    }

    public static function add(int $idMoule,int $indiceFE, string $plageFE, int $pageFE, string $orientationFE, bool $cacheterFE = false, bool $signerFE = false) : self
    {
        return self::create(compact("idMoule","indiceFE","plageFE","pageFE","orientationFE","cacheterFE","signerFE"));
    }

    public static function remove(int $idFE) : void
    {
        self::where("idFE",$idFE)
            ->delete();
    }

    public static function remove2(int $idMoule) : void
    {
        self::where("idMoule",$idMoule)
            ->delete();
    }

    public static function getById(int $idFE) : ? self
    {
        return self::where("idFE",$idFE)
                	->first();
    }

    public static function getByIndiceAndPlage(int $idMoule,int $indiceFE, string $plageFE) : ? self
    {
        return self::where("idMoule",$idMoule)
                 ->where("indiceFE",$indiceFE)
                 ->where(DB::raw("upper(plageFE)"),strtoupper($plageFE))
                ->first();
    }

    public static function feuilles(int $idMoule) : Collection
    {
        return self::where("idMoule",$idMoule)
                    ->orderBy("pageFE","asc")
                    ->orderBy("indiceFE","asc")
                    ->get();
    }


	public static function reviewTamponData(int $idFE,float $tamponXFE, float $tamponYFE) : void
	{
		self::where("idFE",$idFE)
			->update(compact("tamponXFE","tamponYFE"));
	}

	public static function reviewSignatureData(int $idFE,float $signatureXFE, float $signatureYFE) : void
	{
		self::where("idFE",$idFE)
			->update(compact("signatureXFE","signatureYFE"));
	}


	public static function getIdMoules()
	{
		return self::orderBy("idMoule")
					->select("idMoule")
					->distinct()
					->get();
	}

}
