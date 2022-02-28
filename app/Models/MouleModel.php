<?php

namespace App\Models;

use App\Http\Controllers\Library\ConfigController;
use Illuminate\Database\Eloquent\Model;

class MouleModel extends Model
{
    protected $table = "Moule";
    protected $primaryKey = "idMoule";
    protected $fillable = ["nomMoule","verouillerFichier","signatureX","signatureY","logoX","logoY","tamponX","tamponY","pdfJoint","excelSheetPwd"];
    //public $timestamps = false;
    //public $incrementing = false;
    const CREATED_AT = "m_createdAt";
    const UPDATED_AT = "m_updatedAt";

    protected $perPage = 15;


	private static $typeMoules = [
		"excel" => [
			"front" => "Excel",
			"back" => "excel"
		],
		"pdf" => [
			"front" => "PDF",
			"back" => "pdf"
		],
	];




	public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->perPage = ConfigController::getPaginatorMaxDataPerPage();
    }

    public static function add(string $nomMoule,bool $verouillerFichier, ? string $excelSheetPwd = null,
                               ? float $signatureX = 0, ? float $signatureY = 0,
                             ? float $logoX = 0, ? float $logoY = 0,
                             ? float $tamponX = 0, ? float $tamponY = 0
                            ) : self
    {
        return self::create(compact("nomMoule","verouillerFichier","signatureX","signatureY",
            "logoX","logoY","tamponX","tamponY", "excelSheetPwd"));
    }

    public static function modify(int $idMoule,string $nomMoule,bool $verouillerFichier, ? string $excelSheetPwd = null) : void
    {
        self::where("idMoule",$idMoule)
            ->update(compact("nomMoule","verouillerFichier","excelSheetPwd"));
    }


	public static function remove(int $idMoule) : void
	{
		self::where("idMoule",$idMoule)
			->delete();
	}


	public static function reviewLogoData(int $idMoule,float $logoX, float $logoY) : void
    {
        self::where("idMoule",$idMoule)
            ->update(compact("logoX","logoY"));
    }

    public static function reviewTamponData(int $idMoule,float $tamponX, float $tamponY) : void
    {
        self::where("idMoule",$idMoule)
            ->update(compact("tamponX","tamponY"));
    }

    public static function reviewSignatureData(int $idMoule,float $signatureX, float $signatureY) : void
    {
        self::where("idMoule",$idMoule)
            ->update(compact("signatureX","signatureY"));
    }

    public static function reviewPdfJointData(int $idMoule, ? string $pdfJoint)  : void
    {
        self::where("idMoule",$idMoule)
            ->update(compact("pdfJoint"));
    }

    public static function moule(int $idMoule, ? bool $failIfNotFound = false) : self
    {
        $_query = self::where("idMoule",$idMoule);

        if($failIfNotFound)
            return $_query->firstOrFail();
        else
            return $_query->first();
    }

/*
	public static function supprimerPdfJoint(int $idMoule) : void
	{
		self::where("idMoule",$idMoule)
			->update([
				"pdfJoint"=> null
			]);
	}*/

/*
	public static function moules($paginateResults = true)
    {
        $_query = self::orderBy("nomMoule","asc");

        if($paginateResults)
            return $_query->paginate();
        else
            return $_query->get();
    }*/

	public static function moules($paginateResults = true, array $idMouleToExcludes= [], array $idMouleToIncludes= [] )
    {
        $_query = self::orderBy("nomMoule","asc");

        if(!empty($idMouleToExcludes))
			$_query = $_query->whereNotIn("idMoule", $idMouleToExcludes );


        if(!empty($idMouleToIncludes))
			$_query = $_query->whereIn("idMoule", $idMouleToIncludes );

        if($paginateResults)
            return $_query->paginate();
        else
            return $_query->get();
    }

}
