<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depense extends Model
{
    use HasFactory;

    protected $table="depenses";

    public $fillable=[
        'nbPrestF',
        'nbPrestH',
        'montantPrestF',
        'montantPrestH',
        'depenseFonctionnement',
        'user_id',
    ];

    public function users(){
        return $this->belongsTo(User::class,"user_id","id");
    }

    public function mutuelle(){
        return $this->belongsToMany(Mutuelle::class,"mutuelle_id","id");
    }
}
