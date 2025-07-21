<?php
declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    const NAME_COLUMN = "name_template";
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string(self::NAME_COLUMN)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('products', self::NAME_COLUMN)) {
            Schema::table('products', function (Blueprint $table) {
                $table->dropColumn(self::NAME_COLUMN);
            });
        }
    }
};
