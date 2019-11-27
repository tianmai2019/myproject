<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYonghumapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yonghumap', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userid');
            $table->integer('f1');//父级，-1表示不需要帮助，-2表示已完成，对应id编号表示待完成
            $table->integer('f2');//爷爷级
            $table->integer('f3');//祖先往下
            $table->integer('f4');
            $table->integer('f5');
            $table->integer('f6');
            $table->integer('f7');
            $table->integer('f8');
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
        Schema::dropIfExists('yonghumap');
    }
}
