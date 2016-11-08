<?php

use Illuminate\Database\Seeder;
use App\User;
class User_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::find(1);
        if( count($user)>0)
            $user->delete();
        User::create(['name'=>'Hi!Manager','email'=>'superuser@sanbusililanka.com','password'=>encrypt('SanBuSiLiLanKa_Admin')]);
    }
}
