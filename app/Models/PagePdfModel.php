<?php

namespace App\Models;

use App\Http\Controllers\Library\ConfigController;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class PagePdfModel extends Model
{
	protected $table = "PagePdf";
	protected $primaryKey = "idPP";
	protected $fillable = ["idMoule","indicePP","cacheterPP","signerPP",
		"signatureXPP","signatureYPP","tamponXPP","tamponYPP",];
	//public $timestamps = false;
	//public $incrementing = false;
	const CREATED_AT = "pp_createdAt";
	const UPDATED_AT = "pp_updatedAt";

	protected $perPage = 15;


	public function __construct(array $attributes = [])
	{
		parent::__construct($attributes);
		$this->perPage = ConfigController::getPaginatorMaxDataPerPage();
	}

	public static function add(int $idMoule,int $indicePP, bool $cacheterPP = false, bool $signerPP = false) : self
	{
		return self::create(compact("idMoule","indicePP","cacheterPP","signerPP"));
	}

	public static function remove(int $idPP) : void
	{
		self::where("idPP",$idPP)
			->delete();
	}


	public static function remove2(int $idMoule) : void
	{
		self::where("idMoule",$idMoule)
			->delete();
	}


	public static function getById(int $idPP) : ? self
	{
		return self::where("idPP",$idPP)
			->first();
	}

	public static function getByIndice(int $idMoule,int $indicePP) : ? self
	{
		return self::where("idMoule",$idMoule)
			->where("indicePP",$indicePP)
			->first();
	}

	public static function pages(int $idMoule) : Collection
	{
		return self::where("idMoule",$idMoule)
			->orderBy("indicePP","asc")
			->get();
	}


	public static function reviewTamponData(int $idPP,float $tamponXPP, float $tamponYPP) : void
	{
		self::where("idPP",$idPP)
			->update(compact("tamponXPP","tamponYPP"));
	}

	public static function reviewSignatureData(int $idPP,float $signatureXPP, float $signatureYPP) : void
	{
		self::where("idPP",$idPP)
			->update(compact("signatureXPP","signatureYPP"));
	}


	public static function getIdMoules()
	{
		return self::orderBy("idMoule")
			->select("idMoule")
			->distinct()
			->get();
	}

}
