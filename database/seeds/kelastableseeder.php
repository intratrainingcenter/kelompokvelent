<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class kelastableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas')->insert([
            [
	            'nama_kelas' => '3 a',
	            'jumlah_murid' => 20,
	            'wali_kelas' => 'Inugami',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),

            ],
            [
                'nama_kelas' => '3 b',
	            'jumlah_murid' => 20,
	            'wali_kelas' => 'hone ona',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    
            ],
            [
                'nama_kelas' => '3 c',
	            'jumlah_murid' => 20,
	            'wali_kelas' => 'madenake',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    
            ],
            [
                'nama_kelas' => '3 d',
	            'jumlah_murid' => 20,
	            'wali_kelas' => 'yoto hime',
	            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
	            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    
            ]
        ]);
    }
}
