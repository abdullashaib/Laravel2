<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePollingstationShehiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pollingstation_shehia', function (Blueprint $table) {
            $table->integer('shehia_id');
            $table->integer('pollingstation_id');
            $table->primary(['shehia_id', 'pollingstation_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pollingstation_shehia');
    }
}
