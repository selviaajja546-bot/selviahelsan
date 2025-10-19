<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tantangan_harian', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 100);
            $table->text('deskripsi');
            $table->integer('poin');
            $table->date('tanggal_tantangan');
            $table->enum('status', ['aktif', 'selesai'])->default('aktif');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tantangan_harian');
    }
};