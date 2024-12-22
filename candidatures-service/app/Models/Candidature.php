<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    use HasFactory;

    protected $connection = 'candidatures_database';
    protected $table = 'candidatures';

    protected $fillable = [
        'candidat_nom', 
        'candidat_email', 
        'cv', 
        'offre_id'
    ];
}
