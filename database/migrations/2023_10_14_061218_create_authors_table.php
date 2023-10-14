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
        Schema::create('authors', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->text('biography')->nullable();
            $table->string('avatar', 50)->nullable();
            $table->date('birth_date')->nullable();
            $table->date('death_date')->nullable();
            $table->string('birth_place', 250)->nullable();
            $table->string('slug', 100)->unique();
            $table->tinyInteger('gender')->nullable();
            $table->tinyInteger('religion')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('authors');
    }
};
