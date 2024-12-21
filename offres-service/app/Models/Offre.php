<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;

    // Specify the database connection
    protected $connection = 'offres_database';

    // The table associated with the model
    protected $table = 'offres';  // If your table name is different, change this

    // The attributes that are mass assignable
    protected $fillable = [
        'titre', 
        'description', 
        'date_publication'
    ];

    // The attributes that should be cast to native types
    protected $casts = [
        'date_publication' => 'datetime',
    ];
}
