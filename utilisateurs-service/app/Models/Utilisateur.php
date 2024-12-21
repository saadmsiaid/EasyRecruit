<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;

    // Specify the database connection
    protected $connection = 'utilisateurs_database';

    // The table associated with the model
    protected $table = 'utilisateurs';  // Change if the table name is different

    // The attributes that are mass assignable
    protected $fillable = [
        'nom',
        'email',
        'role',
        'mot_de_passe',
    ];

    // Hide the password field when returning data
    protected $hidden = [
        'mot_de_passe',
    ];

    // The attributes that should be cast to native types
    protected $casts = [
        'mot_de_passe' => 'encrypted',
    ];
}
