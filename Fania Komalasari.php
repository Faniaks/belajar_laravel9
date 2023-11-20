<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
        {
            $faker = Faker::create('id_ID');
		//Ketik masing masing
            $data = [
                // ['id' => 1, 'name' => 'Fania', 'score' => 88],
                // ['id' => 2, 'name' => 'Komala', 'score' => 95],
                // ['id' => 3, 'name' => 'Sari', 'score' => 90],
            ];
            $data = [];
            for ($i = 3; $i < 50; $i++) {
                $data[] = [
                    'id' => $i + 1,
                    'name' => $faker->name(),
                    'score' => $faker->numberBetween(50, 100),
                ];
            }
            DB::table('student')->insert($data);
        }
    }