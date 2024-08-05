<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mutuelle extends Model
{
    use HasFactory;

    protected $table="mutuelles";

    public $fillable=[
        "nom","sigle","siege","immUemoa","dateReconnaissance","statut","fonctionnalite",
        "telephone1","telephone2","type_mutuelle_id"
    ];

    public function typem(){
        return $this->belongsTo(Type_Mutuelle::class, "type_mutulles_id","id");
    }

    public function beneficiaires(){
        return $this->hasMany(Beneficiaire::class,"beneficiaire_id","id");
    }

    public function cotisations(){
        return $this->belongsToMany(Cotisation::class,"cotisation_id","id");
    }

    public function depsenses(){
        return $this->belongsToMany(Depense::class,"depense_id","id");
    }
}
