<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class kompentensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kompentensi')->insert([
            [
                'kd_kompentensi' => 'KD001',
                'nama_kompentensi' => 'TITL',
                'prog_keahlian' => 'Teknik Ketenagalistrikan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
    
            ],
            [
                'kd_kompentensi' => 'KD002',
                'nama_kompentensi' => 'TOI',
                'prog_keahlian' => 'Teknik Ketenagalistrikan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
    
            ],
            [
                'kd_kompentensi' => 'KD003',
                'nama_kompentensi' => 'TAV',
                'prog_keahlian' => 'Teknik Elektronika',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
    
            ],
            [
                'kd_kompentensi' => 'KD004',
                'nama_kompentensi' => 'RPL',
                'prog_keahlian' => 'Teknik Komputer dan Informatika',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
    
            ],
            [
                'kd_kompentensi' => 'KD005',
                'nama_kompentensi' => 'TKJ',
                'prog_keahlian' => 'Teknik Komputer dan Informatika',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
    
            ],
            [
                'kd_kompentensi' => 'KD006',
                'nama_kompentensi' => 'TKJ',
                'prog_keahlian' => 'MM',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
    
            ],
        ]);
    }
}
