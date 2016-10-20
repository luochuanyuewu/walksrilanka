<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->increments('id');
            //旅游套餐
            $table->string('tourPackage');
            //到达日期
            $table->date('dateOfArrival');
            //离开日期
            $table->date('dateOfDeparture');
            //成年人
            $table->integer('adults');
            //五到十一岁小孩
            $table->integer('childrenBetweenFiveAndEleven');
            //五岁以下小孩
            $table->integer('childrenUnderFive');
            //房间数
            $table->integer('numberOfRooms');
            //住宿类型
            $table->string('kindOfAccommodation');
            //特殊要求
            $table->string('specialRequests')->nullable();
            //客户名字
            $table->string('name');
            //客户地址
            $table->string('address')->nullable();
            //客户手机
            $table->string('phone');
            //客户邮箱
            $table->string('email');
            //客户微信
            $table->string('wechat_id')->nullable();
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
        Schema::dropIfExists('packages');
    }
}
