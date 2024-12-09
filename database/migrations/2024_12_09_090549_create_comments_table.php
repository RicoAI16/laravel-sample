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
        Schema::create('comments', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->foreignId('post_id')->constrained()->onDelete('cascade'); // Foreign Key to posts table
            $table->string('author'); // Name of the commenter
            $table->text('content'); // Content of the comment
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('comments'); // Drops the table if it exists
    }
};
