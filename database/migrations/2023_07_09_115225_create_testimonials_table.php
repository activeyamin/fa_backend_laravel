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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->longText('testimonial_title_one')->nullable();
            $table->longText('testimonial_short_title_one')->nullable();
            $table->longText('testimonial_title_tow')->nullable();
            $table->longText('testimonial_short_title_tow')->nullable();
            $table->longText('testimonial_title_three')->nullable();
            $table->longText('testimonial_short_title_three')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('testimonials');
    }
};
