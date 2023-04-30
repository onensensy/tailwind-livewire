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
        //Labels has been removed for now
        // Schema::create('food_labels', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('food_id')->constrained('foods')->onDelete('cascade');
        //     $table->string('name', 255);
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('food_labels');
    }
};
