<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Utilisateur
{
    use HasFactory;


    protected $table = 'admins'; 
}
