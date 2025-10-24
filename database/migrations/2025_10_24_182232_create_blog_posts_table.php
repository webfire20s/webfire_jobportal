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
        // Creates the 'blog_posts' table to store all blog articles.
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();

            // Core content fields
            $table->string('title');
            $table->string('slug')->unique()->comment('URL-friendly version of the title.');
            $table->longText('content');
            $table->string('image_path')->nullable()->comment('Path to the featured image.');

            // Metadata and Status
            $table->string('author_name')->default('Admin')->comment('The author of the post.');
            $table->boolean('is_published')->default(false)->comment('Controls public visibility.');
            $table->timestamp('published_at')->nullable()->comment('Date and time the post was published.');

            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_posts');
    }
};
