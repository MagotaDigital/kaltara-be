<?php

use App\Models\KategoriBerita;
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
        Schema::create('beritas', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(KategoriBerita::class)
                ->onDelete('cascade');
            $table->string('judul');
            $table->string('slug');
            $table->string('konten');
            $table->string('penulis')->nullable();
            $table->string('peliput')->nullable();
            $table->date('tanggal_rilis');
            $table->integer('view')->nullable();
            $table->integer('share')->nullable();
            $table->string('gambar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beritas');
    }
};
