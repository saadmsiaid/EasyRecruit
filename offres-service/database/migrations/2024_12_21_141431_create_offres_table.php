<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffresTable extends Migration
{
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->id();  
            $table->string('titre');
            $table->text('description');  
            $table->date('date_publication');  
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('offres');
    }
}
