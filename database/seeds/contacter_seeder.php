<?php

use App\Contacter;
use Illuminate\Database\Seeder;

class Contacter_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contacter::create(['name'=>'小李','avatar'=>'chirantha.jpg','phone'=>'无','wechat_id'=>'chirantha92']);
        Contacter::create(['name'=>'啊酷','avatar'=>'braz.jpg','phone'=>'无','wechat_id'=>'brazz1991']);
        Contacter::create(['name'=>'夏溪','avatar'=>'sasi.jpg','phone'=>'无','wechat_id'=>'sasi1992620']);
        Contacter::create(['name'=>'大宋','avatar'=>'bos.jpg','phone'=>'无','wechat_id'=>'Srilankadasun']);
        Contacter::create(['name'=>'刘金生','avatar'=>'kinson.jpg','phone'=>'15330341148','wechat_id'=>'luochuanyuewu']);

    }
}
