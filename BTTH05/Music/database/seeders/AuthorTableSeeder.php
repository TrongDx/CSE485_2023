<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use App\Models\Author;

class AuthorTableSeeder extends Seeder
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
            Author::create([
                'ma_tgia'=> $i+1,
                'ten_tgia'=>$faker->sentence(3, true),
                'hinh_tgia'=>$faker->imageUrl(200, 200, 'humans', true)                

            ]);
        }
    }
}
