<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cos', function (Blueprint $table) {
            $table->id();
            $table->string('id_produs');
            $table->string('nume');
            $table->string('cantitate');
            $table->decimal('pret', 4, 2);
            $table->string('imagine')->nullable();
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('cos');
    }
};
