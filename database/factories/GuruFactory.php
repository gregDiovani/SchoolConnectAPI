<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guru>
 */
class GuruFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
         $pendidikan = ['S1', 'S2', 'S3'];
         $random = $pendidikan[array_rand($pendidikan)];

         $male = ['male', 'female'];
         $randomMale = $male[array_rand($male)];
         


        return [
            'nip' => fake()->unique()->numerify('####-###-###'),
            'nama_guru' => fake()->unique()->name(),
            'tempat_lahir' => fake()->city(),
            'tgl_lahir' =>fake()->date(),
            'jenkel' => $randomMale,
            'alamat' =>fake()->streetAddress(),
            'no_hp' =>fake()->phoneNumber(),
            'pend_terakhir'=>$random,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }
}
