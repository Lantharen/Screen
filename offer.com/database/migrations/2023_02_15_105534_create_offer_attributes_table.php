<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offer_attributes', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId('offer_id')
                ->references('id')
                ->on('offers')
                ->cascadeOnDelete();
            $table->string('name');
            $table
                ->string('type')
                ->default('string');
            $table->string('value',2047);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offer_attributes');
    }
};
