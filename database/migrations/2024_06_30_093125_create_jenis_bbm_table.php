<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class  extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jenis_bbms', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_bbm');
            $table->unsignedBigInteger('vendor_id')->nullable();
            $table->decimal('harga_bbm', 8, 2); // Using decimal for precise price representation
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('vendor_id')->references('id')->on('vendors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jenis_bbms');
    }
};
