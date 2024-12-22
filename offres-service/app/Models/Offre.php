<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;

    protected $connection = 'offres_database';
    protected $table = 'offres';

    protected $fillable = [
        'titre', 
        'description', 
        'date_publication'
    ];

    protected $casts = [
        'date_publication' => 'datetime',
    ];
}
