<?php

use App\Mobile\Yonghu;
use Faker\Factory;
use Illuminate\Database\Seeder;

class YonghumapTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //用faker来创建数据
        $faker = Factory::create('zh_CN');
        //获取用户数
        $data = Yonghu::query()->get(['id','debtnum'])->toArray();

        foreach ($data as $yognhudata){
            $mapdata[] = [
                "userid" => $yognhudata['id']
            ];
            $yognhudata['debtnum']>600 ? $mapdata[] = ["f1" => 1] : $mapdata[] = ["f1" => 1];
        }
        for($i=0;$i<sizeof($data);$i++){

        }
    }
}
