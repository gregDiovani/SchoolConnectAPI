<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nilai>
 */
class NilaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kd_nilai' => fake()->numerify('###'),
            'nis' =>DB::table('siswa')
            ->select('nis')
            ->get()
            ->random()
            ->nis,
            'kd_matpel'=> DB::table('matpel')
            ->select('kd_matpel')
            ->get()
            ->random()
            ->kd_matpel,

            'nilai_p' => fake()->numberBetween(60,90),
            'nilai_k' => fake()->numberBetween(70,90),
            'semester' =>fake()->numberBetween(1,12),
            'tapel' =>fake()->year(now()),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ];
    
    }
}
