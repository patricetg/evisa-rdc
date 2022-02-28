<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonnelModel extends Model
{
    protected $table = "Personnel";
    protected $primaryKey = "idPers";
    protected $fillable = ["idPers"];
    public $timestamps = false;
    public $incrementing = false;
   /* const CREATED_AT = "pers_createdAt";
    const UPDATED_AT = "pers_updatedAt";*/

   public static function add(int $idPers) : self
   {
       return self::create([
           "idPers" => $idPers
       ]);
   }

}
