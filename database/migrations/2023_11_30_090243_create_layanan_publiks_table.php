<?php

use App\Models\KategoriLayananPublik;
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
        Schema::create('layanan_publiks', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(KategoriLayananPublik::class)
                ->onDelete('cascade');
            $table->string('nama');
            $table->text('deskripsi');
            $table->string('gambar');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layanan_publiks');
    }
};
