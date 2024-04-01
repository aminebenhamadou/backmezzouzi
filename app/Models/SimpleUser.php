<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class SimpleUser extends Utilisateur
{
    use HasFactory;

    // Définir les colonnes spécifiques à un utilisateur simple, en plus de celles héritées de Utilisateur

    protected $table = 'simple_users'; // Nom de la table des utilisateurs simples
}
