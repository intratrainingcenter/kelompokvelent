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
            'nisn' => Carbon::now()->format('Ym').'00001',
            'nama'	=>	'Valen',
            'jenis_kelamin' => 'Laki-Laki',
            'tanggal_lahir' => Carbon::now()->format('Y-m-d H:i:s'),
            'kelas' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),

            ],
            [
                'nisn' => Carbon::now()->format('Ym').'00002',
                'nama'	=>	'Valir',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => Carbon::now()->format('Y-m-d H:i:s'),
                'kelas' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    
            ],
            [
                'nisn' => Carbon::now()->format('Ym').'00003',
                'nama'  =>  'Valor',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => Carbon::now()->format('Y-m-d H:i:s'),
                'kelas' => '3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    
            ],
            [
                'nisn' => Carbon::now()->format('Ym').'00004',
                'nama'  =>  'Valkrie',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => Carbon::now()->format('Y-m-d H:i:s'),
                'kelas' => '4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    
            ],
            [
                'nisn' => Carbon::now()->format('Ym').'00005',
                'nama'  =>  'Value',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => Carbon::now()->format('Y-m-d H:i:s'),
                'kelas' => '4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    
            ],
            [
                'nisn' => Carbon::now()->format('Ym').'00006',
                'nama'  =>  'Valadin',
                'jenis_kelamin' => 'Laki-Laki',
                'tanggal_lahir' => Carbon::now()->format('Y-m-d H:i:s'),
                'kelas' => '4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    
            ]
        ]);
    }
}
