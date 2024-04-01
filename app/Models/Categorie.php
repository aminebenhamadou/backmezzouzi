<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable = [
        'image','Designation'
        ];


        public function scategories()
   {
    return $this->hasMany(SousCategorie::class ,"categorieID");
   }

   public function profil()
    {
        return $this->belongsTo(Profil::class , 'profil_id');
    }
}
