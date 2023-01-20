<?php

namespace Database\Factories;

use App\Models\Kompentensi;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {



        return [
            'nis' => fake()->numerify('####-###-###'),
            'nama_siswa' => fake()->unique()->name(),
            'tempat_lahir' => fake()->city(),
            'tgl_lahir' =>fake()->date(),  // password
            'alamat' =>fake()->streetAddress(),
            'no_telepon' =>fake()->phoneNumber(),
            'kd_kompentensi'=> DB::table('kompentensi')
            ->select('kd_kompentensi')
            ->get()
            ->random()
            ->kd_kompentensi,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ];
    }
}
