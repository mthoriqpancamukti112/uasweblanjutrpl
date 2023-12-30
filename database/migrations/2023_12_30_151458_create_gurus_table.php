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
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->String('image');
            $table->integer("nip");
            $table->String("nama_guru", 100);
            $table->String("no_hp");
            $table->String("jk", 50);
            $table->integer("mata_pelajaran");
            $table->text("alamat");
            $table->String("username", 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};
