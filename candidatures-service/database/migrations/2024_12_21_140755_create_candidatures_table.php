<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidaturesTable extends Migration
{
    public function up()
    {
        Schema::create('candidatures', function (Blueprint $table) {
            $table->id();  
            $table->string('candidat_nom');  
            $table->string('candidat_email');  
            $table->text('cv');  
            $table->foreignId('offre_id')->constrained('offres')->onDelete('cascade');  
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('candidatures');
    }
}
