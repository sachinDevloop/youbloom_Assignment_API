<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
           $table->increments('id');
           $table->string('band_name',50);
           $table->string('genre',50);
           $table->string('location',50);
           $table->Integer('likes')->default(0);
           $table->Integer('dislikes')->default(0);
            $table->timestamps();
            $table->unique(["band_name", "genre", "location" ], 'artistsuni');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artists');
    }
};
