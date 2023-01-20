<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matpel>
 */
class MatpelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        static $counter = 0;
        $pelajaran = ['Kimia', 'Fisika', 'Kimia', 'Matematika', 'Bhs Indonesia', 'Bhs Inggris', 'Penjaskes'];

        // $random = Arr::random($array);

        return [
            'kd_matpel' => fake()->numerify('KD###') ,
            'nama_matpel' => $pelajaran[$counter++],
            'jumlah_jam' => fake()->numberBetween(1,3),
            'tingkat' => fake()->numberBetween(1,3),
            'kd_kompentensi' =>DB::table('kompentensi')
            ->select('kd_kompentensi')
            ->get()
            ->random()
            ->kd_kompentensi,
            'nip'=>DB::table('guru')
            ->select('nip')
            ->get()
            ->random()
            ->nip,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()

        ];
    }
}
