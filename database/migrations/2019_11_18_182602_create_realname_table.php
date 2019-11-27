<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRealnameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //实名认证信息表
        Schema::create('realname', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userid')->notNull();//用户编号
            $table->string('realname',50)->notNull();//真实姓名
            $table->string('identitycard',18)->notNull();//身份证号
            $table->string('identitypegfronturl',200)->notNull();//身份证正面
            $table->string('identitypegversourl',200)->notNull();//身份证反面
            $table->tinyInteger('status')->default('1');//审核状态，1待验证，2通过，3不通过
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
        Schema::dropIfExists('realname');
    }
}
