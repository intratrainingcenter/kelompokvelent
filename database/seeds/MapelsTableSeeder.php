<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class MapelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mapels')->insert(
            [[
                'id_mapel' => Carbon::now()->format('Ym').'00001',
               'mapel' => 'Matematika',
               'pengajar' => 'Yuma Asami',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id_mapel' => Carbon::now()->format('Ym').'00002',
               'mapel' => 'Olahraga',
               'pengajar' => 'Anri Okita',
               'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
               'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
             ]]
       );
    }
}
