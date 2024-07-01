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
        Schema::create('calculates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('namaKendaraan', 60);
            $table->date('tanggal');
            $table->decimal('kilometer_awal', 8, 2);
            $table->decimal('kilometer_akhir', 8, 2);
            $table->decimal('bbm_awal', 8, 2);
            $table->decimal('bbm_akhir', 8, 2);
            $table->unsignedBigInteger('bbm_id')->nullable();
            $table->decimal('harga_bbm', 8, 2);
            $table->decimal('total_jarak', 8, 2);
            $table->decimal('total_bbm', 8, 2);
            $table->decimal('konsumsi_bbm', 8, 2);
            $table->decimal('total_biaya', 8, 2);

            $table->timestamps();

            $table->foreign('bbm_id')->references('id')->on('jenis_bbms')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calculates');
    }
};
