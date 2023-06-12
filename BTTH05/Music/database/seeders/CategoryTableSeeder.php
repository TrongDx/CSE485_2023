<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        for($i = 0; $i < 50; $i++){
            Category::create([
                'ma_tloai'=> $i+1,
                'ten_tloai'=>$faker->sentence(2)

            ]);
        }
    }
}
