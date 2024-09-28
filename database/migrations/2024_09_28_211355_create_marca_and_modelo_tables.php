<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('marca', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->timestamps();
    });

    Schema::create('modelo', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->foreignId('marca_id')->constrained('marca')->onDelete('cascade');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('modelo');
    Schema::dropIfExists('marca');
}

};
