<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beneficiaire extends Model
{
    use HasFactory;

    protected $table="beneficiaires";

    public $fillable=[
        'nbAdh_F',
        'nbAdh_H',
        'nbAdhAj_F',
        'nbAdhAj_H',
        'nbBen_F',
        'nbBen_H',
        'nbBenAj_F',
        'nbBenAj_H',
        'mutuelle_id',
    ];

    public function type(){
        return $this->belongsTo(Mutuelle::class,"mutuelle_id","id");
    }

}
