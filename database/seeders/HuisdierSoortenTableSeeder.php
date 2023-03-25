<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class HuisdierSoortenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $huisdier_soorten_array = ["Hond", "Kat", "Parkiet", "Konijn", "Vis"];

        foreach($huisdier_soorten_array as $huisdier_soort){
            DB::table('huisdier_soorten')->insert([
                'soort' => $huisdier_soort
            ]);
        }  
    }
}
