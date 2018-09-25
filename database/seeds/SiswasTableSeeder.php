<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswas')->insert([
            [
            'nisn' => '39809841098490',
            'nama'	=>	'Val',
            'jenis_kelamin' => 'pria',
            'tanggal_lahir' => Carbon::now()->format('Y-m-d H:i:s'),
            'kelas' => '3 a',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),

            ],
            [
                'nisn' => '39809841098490',
                'nama'	=>	'Val',
                'jenis_kelamin' => 'pria',
                'tanggal_lahir' => Carbon::now()->format('Y-m-d H:i:s'),
                'kelas' => '3 b',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    
                ]
        ]);
    }
}
