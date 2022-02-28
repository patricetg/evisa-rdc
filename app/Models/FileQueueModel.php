<?php

namespace App\Models;

use App\Http\Controllers\Library\ConfigController;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class FileQueueModel extends Model
{
	protected $table = "FileQueue";
	protected $primaryKey = "idFQ";
	protected $fillable = ["libFQ","typeFQ","idPers"];
	//public $timestamps = false;
	//public $incrementing = false;
	const CREATED_AT = "fq_createdAt";
	const UPDATED_AT = "fq_updatedAt";

	protected $perPage = 15;

	private static $typeFQs = [
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


	public static function addIfNotExists(int $idPers, string $libFQ,string $typeFQ) : self
	{
		return self::firstOrCreate(compact("idPers", "libFQ"),compact("typeFQ"));
	}

	/*public static function queues2(\DateTime $olderThan): Collection
	{
		return self::where("fq_createdAt","<=",$olderThan)
			->get();
	}*/

	public static function remove(int $idFQ) : void
	{
		self::where("idFQ",$idFQ)
			->delete();
	}

	/**
	 * @return array
	 */
	public static function getTypeFQs(): array
	{
		return self::$typeFQs;
	}


}
