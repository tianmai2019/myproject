<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //用户表
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');//主键
            $table->string('username',20)->notNull();
            $table->string('password')->notNull();
            $table->integer('debtnum')->default('0');//欠款
            $table->tinyInteger('level')->default('1');//当前等级
            $table->string('mobile',11)->notNull();
            $table->string('mobile_b',11);
            $table->tinyInteger('realnamestate')->default('1');//实名认证，1未认证2认证
            $table->tinyInteger('openstate')->default('1');//账号开通认证，1未认证2认证
            $table->tinyInteger('finishonestate')->default('1');//是否完成一级众筹，1未完成2完成
            $table->integer('pusher');//推荐人
            $table->integer('f1');//父级，-1表示不需要帮助，-2表示已完成，对应id编号表示待完成
            $table->integer('f2');//爷爷级
            $table->integer('f3');//祖先往下
            $table->integer('f4');
            $table->integer('f5');
            $table->integer('f6');
            $table->integer('f7');
            $table->integer('f8');
            $table->timestamps();//创建和修改的时间字段
            $table->rememberToken();//实现记住登陆状态的字段，用于存储token
            $table->tinyInteger('status')->default('1');//账号状态，1未开启，2开启
        });
    }

    /**-
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yonghu');
    }
}
