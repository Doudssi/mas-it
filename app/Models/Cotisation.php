<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cotisation extends Model
{
    use HasFactory;

    protected $table="cotisations";

    public $fillable=[
        'cotisationAttendue',
        'cotisationRecouvree',
        'montantCofinancement',
        'autreMontant',
        'user_id',
    ];
    public function users(){
        return $this->belongsTo(User::class,"user_id","id");
    }

    public function mutuelles(){
        return $this->belongsToMany(Mutuelle::class,"mutuelle_id","id");
    }
}
