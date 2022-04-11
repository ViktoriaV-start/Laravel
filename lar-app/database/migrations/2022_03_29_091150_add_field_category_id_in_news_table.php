<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldCategoryIdInNewsTable extends Migration
{
    public function up()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->foreignId('category_id') // имя колонки
                ->after('id') // где расположить новую колонку
                ->constrained('categories') //с какой таблицей связан
                ->cascadeOnDelete(); // каскадное удаление

        });
    }

    public function down()
    {
        Schema::table('news', function (Blueprint $table) {
            $table->dropForeign('category_id'); // удаление ключа и столбца
            $table->dropColumn('category_id');
        });
    }
}
