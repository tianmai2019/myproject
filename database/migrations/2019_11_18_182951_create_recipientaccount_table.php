<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipientaccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //收款方式表
        Schema::create('recipientaccount', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userid')->notNul();//用户编号
            $table->string('wechataccount',100);
            $table->string('wechatqrcodepegurl',200);
            $table->string('alipayaccount',100);
            $table->string('alipayqrcodepegrul',200);
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
        Schema::dropIfExists('recipientaccount');
    }
}
