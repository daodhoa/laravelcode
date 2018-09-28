<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblComicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_comic', function (Blueprint $table) {
            $table->increments('c_id');
            $table->string('c_name',200);
            $table->text('c_description');
            $table->string('t_id');
            $table->integer('c_rate');
            $table->string('c_link_image', 100);
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
        Schema::dropIfExists('tbl_comic');
    }
}
