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
        Schema::create('carousels', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->string("name")->default('decorTitle');
            $table->integer("count_decor")->default(1);
            $table->string("product_work_name");//TODO zautomatyzowanie tych karuzeli docelowo jeszcze jedna tabela która będize łączyła wyniki z tych 2 tabel pivot
            $table->string("directory")->default("decor");
            $table->string("id_decor")->nullable();
            $table->boolean("available_catalog")->default(true);
            $table->boolean("active")->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carousels');
    }
};
