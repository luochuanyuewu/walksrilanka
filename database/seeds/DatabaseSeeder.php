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
        //管理员Seeder
        \App\User::create(['name'=>'Hi!Manager','email'=>'luochuanyuewu@qq.com','password'=>encrypt('luochuanyuewu')]);


        // $this->call(UsersTableSeeder::class);
        $this->call(Category_Seeder::class);
        $this->call(Contacter_Seeder::class);
        $this->call(Setting_Seeder::class);
        $this->call(Article_Seeder::class);
        $this->call(Thumbnail_Seeder::class);
        $this->call(Picture_Seeder::class);




    }
}
