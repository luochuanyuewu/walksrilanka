<?php

use Illuminate\Database\Seeder;

class Category_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Category::create(['name'=>'PlacesToGo']);
        \App\Category::create(['name'=>'ThingsToDo']);
        \App\Category::create(['name'=>'TravelInfo']);
        \App\Category::create(['name'=>'FoodAndDrinkInfo']);


    }
}
