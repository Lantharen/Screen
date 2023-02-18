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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description', 1023)->nullable();
            $table->unsignedDecimal('min_price', 20);
            $table->unsignedDecimal('max_price',20)->nullable();
            $table->unsignedDecimal('min_percent',5);
            $table->unsignedDecimal('max_percent',5)->nullable();
            $table->unsignedInteger('duration_in_seconds');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offers');
    }
};
