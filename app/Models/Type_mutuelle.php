<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type_mutuelle extends Model
{
    use HasFactory;

    protected $table = "type_mutuelles";

    protected $fillable = ["type"];

    public function mutuelles(){
        return $this->hasMany(Mutuelle::class);
       // return $this->hasMany(Mutuelle::class, "mutuelle_id","id");
    }

}
