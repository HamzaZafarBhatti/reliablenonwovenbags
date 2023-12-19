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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo')->nullable();
            $table->string('banner_heading_1');
            $table->string('banner_heading_2');
            $table->string('banner_button_text');
            $table->string('about_us_image')->nullable();
            $table->string('about_us_heading');
            $table->text('about_us_description_1');
            $table->text('about_us_description_2');
            $table->string('about_us_button_text');
            $table->string('products_heading');
            $table->text('products_description')->nullable();
            $table->string('contactus_heading');
            $table->text('contactus_description')->nullable();
            $table->string('contactus_button_text');
            $table->string('social_facebook')->nullable();
            $table->string('social_twitter')->nullable();
            $table->string('social_instagram')->nullable();
            $table->string('social_whatsapp')->nullable();
            $table->string('social_phone')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('office_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
