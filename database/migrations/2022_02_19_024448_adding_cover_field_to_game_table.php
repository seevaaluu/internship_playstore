<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddingCoverFieldToGameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('games', function (Blueprint $table) {
            $table->string('cover')->after('platform')->default('https://images.vexels.com/media/users/3/153079/isolated/preview/eec464c3ad74f3f210bb2e3fcfa63ed1-icono-plano-de-caja-de-disco-compacto.png');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('games', function (Blueprint $table) {
            $table->dropColumn('cover');
        });
    }
}
