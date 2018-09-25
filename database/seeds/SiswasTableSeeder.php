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
            'nama'	=>	'Valen',
            'jenis_kelamin' => 'pria',
            'tanggal_lahir' => Carbon::now()->format('Y-m-d H:i:s'),
            'kelas' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),

            ],
            [
                'nisn' => '39809841098491',
                'nama'	=>	'Valir',
                'jenis_kelamin' => 'pria',
                'tanggal_lahir' => Carbon::now()->format('Y-m-d H:i:s'),
                'kelas' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    
            ],
            [
                'nisn' => '39809841098492',
                'nama'  =>  'Valor',
                'jenis_kelamin' => 'pria',
                'tanggal_lahir' => Carbon::now()->format('Y-m-d H:i:s'),
                'kelas' => '3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    
            ],
            [
                'nisn' => '39809841098493',
                'nama'  =>  'Valkrie',
                'jenis_kelamin' => 'pria',
                'tanggal_lahir' => Carbon::now()->format('Y-m-d H:i:s'),
                'kelas' => '4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    
            ]
        ]);
    }
}
