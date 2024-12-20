<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    // Add a foreign key to the orders table
    Schema::table('wallpapers', function (Blueprint $table) {
        $table->unsignedBigInteger('id')->nullable(); // Add the column
        $table->foreign('id')->references('id')->on('features')->onDelete('cascade'); // Add the foreign key constraint
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
