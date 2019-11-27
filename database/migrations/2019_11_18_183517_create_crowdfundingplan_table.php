<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrowdfundingplanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //众筹计划表
        Schema::create('crowdfundingplan', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userid')->notNull();
            $table->integer('housingloan')->default('0');//房贷
            $table->integer('vehicleloan')->default('0');//车贷
            $table->integer('goodsloan')->default('0');//货贷
            $table->integer('creditcard')->default('0');//信用卡
            $table->integer('otherloan')->default('0');//其它贷款
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
        Schema::dropIfExists('crowdfundingplan');
    }
}
