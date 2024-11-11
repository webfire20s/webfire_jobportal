<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');                      // Page title
            $table->string('slug')->unique();             // Unique slug for URL
            $table->string('feature_image')->nullable();  // Path to feature image
            $table->string('meta_title')->nullable();     // Meta title for SEO
            $table->text('meta_description')->nullable(); // Meta description for SEO
            $table->text('meta_tags')->nullable();        // Meta tags for SEO
            $table->longText('content')->nullable();      // Main page content
            $table->boolean('status')->default(true);     // Published status
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
