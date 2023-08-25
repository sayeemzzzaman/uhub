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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('logo')->nullable();
            $table->string('contributors');
            $table->string('github')->nullable();
            $table->string('scholar')->nullable();
            $table->string('owner');
            $table->string('bio');
            $table->integer('like')->nullable();
            $table->enum('dept', ['cse','eee','civil'])->default('cse');
            $table->enum('status', ['public','private'])->default('private');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
