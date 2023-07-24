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
        Schema::create('chapters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->foreignId('university_id')->constrained("universities")->onDelete("cascade");
            $table->text('description');
            $table->string('logo');
            $table->foreignId('president_id')->constrained("users")->onDelete("cascade");
            $table->foreignId('vice_president_id')->constrained("users")->onDelete("cascade");
            $table->foreignId('secratery_id')->constrained("users")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chapters');
    }
};
