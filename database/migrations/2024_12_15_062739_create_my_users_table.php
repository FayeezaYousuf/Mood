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
        Schema::create('my_users', function (Blueprint $table) {
            $table->id('id')->primary();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('points')->default(0); 
            //chnages 
            $table->string('profile_pic')->default('p2.jpg'); 
            $table->string('wallpaper')->default('back1.jpg');  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('my_users');
    }
};
