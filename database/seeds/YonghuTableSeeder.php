<?php

use App\Mobile\Yonghu;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class YonghuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //用faker来生成数据
        $faker = Factory::create('zh_CN');

        //循环生成数据
        for ($i=0;$i<30;$i++){
            //具体的数据
            $data[] = [
                'username' => $faker ->userName,
                'password' => bcrypt('123123'),
                'debtnum' => rand(10000,30000),
                'level' => 1,
                'mobile' => $faker -> phoneNumber,
                'mobile_b' => $faker -> phoneNumber,
                'realnamestate' => rand(1,2),
                'openstate' => rand(1,2),
                'finishonestate' => rand(1,2),
                'pusher' => rand(1,10),
                'fid' => rand(1,10),
                'created_at' => date('Y-m-d H:i:s',time()),
                'status' => rand(1,2)
            ];
        }

        //写入数据库
        DB::table('yonghu')->insert($data);
        //修改对应负债等级
        $yonghus = Yonghu::query()->get(['id','debtnum'])->toArray();
        foreach ($yonghus as $yonghu){
            if($yonghu['debtnum']>600){

            }elseif ($yonghu['debtnum']>1800){

            }elseif ($yonghu['debtnum']>5400){

            }elseif ($yonghu['debtnum']>16200){

            }elseif ($yonghu['debtnum']>48600){

            }elseif ($yonghu['debtnum']>145800){

            }elseif ($yonghu['debtnum']>437400){

            }elseif ($yonghu['debtnum']>1312200){

            }

            Yonghu::query()->where('id',$yonghu['id'])->update();
        }

    }
}
