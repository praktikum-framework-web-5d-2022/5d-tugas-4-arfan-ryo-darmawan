<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\MataKuliah;

class MatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 10; $i++) {
            MataKuliah::create([
                'kode_mk' => $faker->unique()->numerify('IF###'),
                'nama_mk' => $faker->firstName . " " . $faker->lastName,
                'sks' => $faker->numberBetween(1, 4),
                'nama_dosen' => $faker->firstName . " " . $faker->lastName
            ]);
        };
    }
}
