<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('rating', function (Blueprint $table) {
            $table->dropColumn('rating');
        });
    }

    public function down()
    {
        Schema::table('rating', function (Blueprint $table) {
            $table->integer('rating'); // Тип данных зависит от вашего столбца rating
        });
    }
};
