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
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('first_name')->nullable();;
            $table->string('last_name')->nullable();;
            $table->float('height')->nullable();;
            $table->float('weight')->nullable();;
            $table->date('dob')->nullable();;
            $table->enum('gender', ['male', 'female'])->nullable();;
            // $table->enum('activity_level', ['sedentary', 'lightly active', 'moderately active', 'very active', 'extra active']);
            // $table->float('bmr');
            $table->float('bmi')->nullable();;
            // $table->enum('goal', ['lose', 'maintain', 'gain'], 255);
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
        Schema::dropIfExists('user_profiles');
    }
};
