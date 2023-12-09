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
        Schema::create('pimpinan_daerahs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jabatan');
            $table->string('gambar');
            $table->text('biodata');
            $table->text('riwayat_pendidikan');
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->text('karir');
            $table->string('dokumen')->nullable();
            $table->text('sosmed')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pimpinan_daerahs');
    }
};
