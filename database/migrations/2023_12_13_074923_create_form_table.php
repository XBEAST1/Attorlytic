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
        Schema::create('form_data', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->mediumText('description');
            $table->string('gender');
            $table->string('image');
            $table->string('fee');
            $table->string('country');
            $table->string('city');
            $table->string('educationinfo');
            $table->string('additionalinfo');
            $table->string('specializeinfo');
            $table->mediumText('about');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_data');
    }
};
