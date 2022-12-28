<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MataKuliah>
 */
class MataKuliahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = Faker::create('id_ID');
        $matkul = [
            "Basis Data", "Pemrograman Berbasis objek", "PKN",
            "Matematika Diskrit", "Pengantar Teknologi dan Informasi", "Kalkulus",
            "Bahasa Inggris", "Agpritma dan Pemrograman", "Fisika Dasar",
            "Jaringan Komputer", "Metode Numerik", "Pengantar Kecerdasan Buatan", 
            "Teori Bahasa dan Automata", "Keamanan Sistem", "Analisis dan Desain Berorientasi Objek",
            "Kajian Jurnal Informatika", "Sistem Operasi", "Framework Pemrograman Web",
            "Statistika", "Pemrograman Berbasis Mobile", "Pengolahan Basis Data",
            "Data Mining", "Cloud computing", "Pengelola Basis Data"
        ];

        return [
            'kode_mk' => $faker->unique()->numerify('IF###'),
            'nama_mk' => $faker->randomElement($matkul),
            'sks' => $faker->numberBetween(1, 4),
            'nama_dosen' => $faker->firstName . " " . $faker->lastName
        ];
    }
}
