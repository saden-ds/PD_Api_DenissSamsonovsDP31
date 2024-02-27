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
        Schema::create('kursis', function (Blueprint $table) {
            $table->id();
            $table->string('nosaukums');
            $table->text('paskaidrojums');
            $table->string('banera_adrese');
            $table->integer('cilveku_skaits');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kursis');
    }
};
