<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateImageColumnInPizzasTable extends Migration
{
    public function up()
    {
        Schema::table('pizzas', function (Blueprint $table) {
            $table->string('image')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('pizzas', function (Blueprint $table) {
            // Revert the change if needed
            $table->string('image')->nullable(false)->change();
        });
    }
}
