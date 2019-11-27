<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username',20)->notNull();//用户名
            $table->string('password')->nutNull();//密码
            $table->enum('sex',[1,2,3])->notNull()->default('1');//1男，2女，3保密
            $table->string('mobile',11);//手机号
            $table->tinyInteger('role_id');//角色表中的主键id
            $table->rememberToken();
            $table->enum('status',[1,2])->default('2');//账号状态，1禁用，2启用
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
        Schema::dropIfExists('admin');
    }
}
