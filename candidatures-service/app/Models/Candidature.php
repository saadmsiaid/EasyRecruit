<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    use HasFactory;

    // Specify the database connection
    protected $connection = 'candidatures_database';

    // The table associated with the model
    protected $table = 'candidatures';  // Change if the table name is different

    // The attributes that are mass assignable
    protected $fillable = [
        'candidat_nom', 
        'candidat_email', 
        'cv', 
        'offre_id'
    ];

    // Define the relationship with the Offre model (a candidature belongs to an offer)
    public function offre()
    {
        return $this->belongsTo(Offre::class, 'offre_id');
    }
}
