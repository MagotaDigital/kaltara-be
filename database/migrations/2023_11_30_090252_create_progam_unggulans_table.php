<?php

use App\Models\KategoriProgamUnggulan;
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
        Schema::create('progam_unggulans', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(KategoriProgamUnggulan::class)
                ->onDelete('cascade');
            $table->string('name');
            $table->text('deskripsi');
            $table->string('organisasi');
            $table->string('link');
            $table->string('sosmed');
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
        Schema::dropIfExists('progam_unggulans');
    }
};
