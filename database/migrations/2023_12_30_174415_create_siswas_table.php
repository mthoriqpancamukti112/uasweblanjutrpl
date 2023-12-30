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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->integer('nisn');
            $table->String('nama_siswa', 100);
            $table->String('kota', 100);
            $table->String('jk', 50);
            $table->String('agama', 100);
            $table->integer('jurusan');
            $table->integer('kelas');
            $table->String('username', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
