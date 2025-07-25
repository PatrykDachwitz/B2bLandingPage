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
        Schema::create('carousel_product', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger("carousel_id");
            $table->unsignedBigInteger("product_id");
            $table->boolean("active")->default(true);

            $table->foreign("carousel_id")
                ->references("id")
                ->on("carousels");

            $table->foreign("product_id")
                ->references("id")
                ->on("products");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carousel_product');
    }
};
