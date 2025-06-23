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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger("category_banner_id");
            $table->string("url")->nullable();
            $table->string("name")->nullable();
            $table->string("image")->nullable();
            $table->string("image_alt")->nullable();
            $table->boolean("active")->default(false);
            $table->integer("position")->default(1);
            $table->foreign("category_banner_id")
                ->references("id")
                ->on("category_banners");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
