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
    public function up(): void
    {
        Schema::create('todos', function (Blueprint $table) {
            // Define the columns
            $table->id(); // Primary key column
            $table->foreignId('user_id')->constrained()->cascadeOnDelete(); // Delete todos if the user is deleted
            $table->string('title'); // Title of the todo
            $table->boolean('is_done')->default(false); // Status of the todo
            $table->timestamps(); // Created at and updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('todos'); // Drop the todos table if it exists
    }
};
