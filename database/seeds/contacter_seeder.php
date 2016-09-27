<?php

use Illuminate\Database\Seeder;
use App\Contacter;
class contacter_seeder extends Seeder
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

    }
}
