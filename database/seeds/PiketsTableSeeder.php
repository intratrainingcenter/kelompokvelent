<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class PiketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pikets')->insert(
         [[
            'nisn' => '4256336546',
            'jadwalhari' => 'Senin',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
         ],
         [
            'nisn' => '4256336546',
            'jadwalhari' => 'Selasa',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
          ]]
    );
    }
}
