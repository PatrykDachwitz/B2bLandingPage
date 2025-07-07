<?php
declare(strict_types=1);
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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->string("url");
            $table->string("name");
            $table->boolean("active")->default(true);
        });
        Schema::create('category_product', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean("active")->default(true);
            $table->softDeletes();
            $table->unsignedBigInteger("category_id");
            $table->unsignedBigInteger("product_id");

            $table->foreign("category_id")
                ->references("id")
                ->on("categories");
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
        Schema::dropIfExists('category_product');
        Schema::dropIfExists('categories');
    }
};
