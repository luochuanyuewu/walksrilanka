<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(Contacter_Seeder::class);
        $this->call(Setting_Seeder::class);

        //管理员Seeder
        \App\User::create(['name'=>'管理员','email'=>'luochuanyuewu@qq.com','password'=>encrypt('luochuanyuewu')]);
    }
}
