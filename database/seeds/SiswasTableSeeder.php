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
            'nisn' => '39809841098490',
            'nama'	=>	'Val',
            'jenis_kelamin' => 'pria',
            'tanggal_lahir' => Carbon::now()->format('Y-m-d H:i:s'),
            'jurusan' => 'TKJ',
            'kelas' => '3',
            'subkelas' => '3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),

        ]);
    }
}