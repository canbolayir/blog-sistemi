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
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('content');
            $table->string('template')->nullable(); // Özel sayfa şablonu
            $table->string('featured_image')->nullable();
            $table->integer('order')->default(0);
            $table->string('status')->default('draft'); // draft, published
            $table->json('meta_data')->nullable(); // SEO meta verileri
            $table->timestamps();
            $table->softDeletes();
        });
        
        // Kendi kendine referans veren tabloda foreign key kısıtlamasını tablo oluştuktan sonra ekliyoruz
        Schema::table('pages', function (Blueprint $table) {
            $table->foreign('parent_id')
                  ->references('id')
                  ->on('pages')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
