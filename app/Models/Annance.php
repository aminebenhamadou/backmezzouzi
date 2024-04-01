<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annance extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre', 'contenu', 'datecreation', 'utilisateur_id' , 'scategorieID' 
    ];

        

        public function sousCategorie()
    {
        return $this->belongsTo(SousCategorie::class , "scategorieID");
    }
    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class , 'utilisateur_id');
    }
     

}
