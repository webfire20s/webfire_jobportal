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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('filter_class')->comment('The category class for Isotope filtering (e.g., filter-egov)');
            $table->string('title', 100);
            $table->string('subtitle');
            $table->string('image')->comment('Path or URL to the service image.');
            $table->string('alt')->nullable()->comment('Image alt text.');
            $table->string('url')->comment('The destination URL for the "More" link.');
            $table->string('style')->nullable()->comment('Optional inline CSS style for the image.');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
