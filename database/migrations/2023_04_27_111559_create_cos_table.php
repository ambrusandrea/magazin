<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produs_id');
            $table->integer('cantitate');
            $table->float('pret');
            $table->unsignedBigInteger('utilizator_id');

            $table->foreign('produs_id')->references('id')->on('produse');
            $table->foreign('utilizator_id')->references('id')->on('utilizatori');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cos');
    }
};
