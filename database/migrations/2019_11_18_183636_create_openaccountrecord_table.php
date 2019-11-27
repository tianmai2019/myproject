<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpenaccountrecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //开通账户付款记录
        Schema::create('openaccountrecord', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fromuser')->notNull();//转账人
            $table->integer('touser')->notNull();//转账对象
            $table->integer('money')->default('200');//转账金额
            $table->string('transferpegurl',200)->notNull();//转账记录图片地址
            $table->tinyInteger('status')->default('1');//1待确认，2已确认，3驳回
            $table->timestamps();//创建和修改时间字段
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('openaccountrecord');
    }
}
