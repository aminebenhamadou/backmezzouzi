<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',  'prenom' ,'email' , 'image'
        ];

        public function profil()
        {
            return $this->hasOne(Profil::class);
        }

        public function annonces()
        {
            return $this->hasMany(Annance::class);
        }
        public function boiteReception()
        {
            return $this->hasOne(BoiteReception::class);
        }
       
}
