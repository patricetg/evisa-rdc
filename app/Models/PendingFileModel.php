<?php

namespace App\Models;

use App\Http\Controllers\Library\ConfigController;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class PendingFileModel extends Model
{
	protected $table = "PendingFile";
	protected $primaryKey = "idPF";
	protected $fillable = ["cheminPF","idFQ"];
	//public $timestamps = false;
	//public $incrementing = false;
	const CREATED_AT = "pf_createdAt";
	const UPDATED_AT = "pf_updatedAt";

	protected $perPage = 15;


	public function __construct(array $attributes = [])
	{
		parent::__construct($attributes);
		$this->perPage = ConfigController::getPaginatorMaxDataPerPage();
	}

	public static function add(string $cheminPF, int $idFQ) : self
	{
		return self::create(compact("cheminPF","idFQ"));
	}

	public static function files(? int $idPers=null,? string $typeFQ = null, ? string $libFQ=null, ? \DateTime $fileQueueOlderThan=null, $paginateResults = false)
	{
		$_query = DB::table("PendingFile as pf")
			        ->join("FileQueue as fq","fq.idFQ","pf.idFQ")
					->join("Personne as p","p.idPers","fq.idPers");


		if(isset($idPers))
			$_query = $_query->where("lower(fq.idPers)",strtolower($idPers));


		if(isset($typeFQ))
			$_query = $_query->where("lower(fq.typeFQ)",strtolower($typeFQ));


		if(isset($libFQ))
			$_query = $_query->where("lower(fq.libFQ)",strtolower($libFQ));

		if(isset($fileQueueOlderThan))
			$_query = $_query->where("fq.fq_createdAt","<=",$fileQueueOlderThan);


		$_query = $_query->select("pf.*","fq.*","p.*");

		if($paginateResults)
			return $_query->paginate();
		else
			return $_query->get();
	}

	public static function remove(int $idPF) : void
	{
		self::where("idPF",$idPF)
			->delete();
	}

}
