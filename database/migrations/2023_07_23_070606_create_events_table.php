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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId("chapter_id")->constrained("chapters")->onDelete("cascade");
            $table->foreignId("sub_chapter_id")->constrained("sub_chapters")->onDelete("cascade");
            $table->string("name");
            $table->string("slug")->unique();
            $table->text("description");
            $table->string("poster");
            $table->string("venue");
            $table->timestamp("start_at")->nullable();
            $table->timestamp("end_at")->nullable();
            $table->boolean("is_published")->default(false);
            $table->foreignId("published_by")->nullable()->constrained("users")->onDelete("cascade");
            $table->timestamp("published_at")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
