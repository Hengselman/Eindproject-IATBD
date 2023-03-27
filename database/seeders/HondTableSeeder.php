<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class HondTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("huisdier")->insert([
            'name' => 'Elouise',
            'soort' => "Hond",
            'image' => '/img/hond_elouise.jpg',
            'description' => "Elouise is een erg rustige hond. Ze kan goed overweg met andere honden en slaapt graag in haar zachte mand.",
            'eigenaar_id' => 2,
            'eigenaar_name' => 'Gert Janus'
        ]);

        DB::table("huisdier")->insert([
            'name' => 'Hendrik',
            'soort' => "Hond",
            'image' => '/img/hond_hendrik.jpg',
            'description' => "Hendrik is een jonge hond van 5 maanden. Hij is erg enthousiast met speeltjes en moet nog leren omgaan met kinderen.",
            'eigenaar_id' => 2,
            'eigenaar_name' => 'Gert Janus'
        ]);

        DB::table("huisdier")->insert([
            'name' => 'Chappo',
            'soort' => "Hond",
            'image' => '/img/hond_chappo.jpg',
            'description' => "Chappo speelt graag met zijn knuffels en botjes. Hij vindt het ook heerlijk om los te rennen in het bos.",
            'eigenaar_id' => 2,
            'eigenaar_name' => 'Gert Janus'
        ]);

        DB::table("huisdier")->insert([
            'name' => 'Bianca',
            'soort' => "Hond",
            'image' => '/img/hond_bianca.jpg',
            'description' => "Bianca is er als eerste bij wanneer iemand wilt gaan wandelen. Het liefst rent ze de hele dag buiten. Een erg energieke hond dus!",
            'eigenaar_id' => 2,
            'eigenaar_name' => 'Gert Janus'
        ]);

        DB::table("huisdier")->insert([
            'name' => 'Boris',
            'soort' => "Hond",
            'image' => '/img/hond_boris.jpg',
            'description' => "Boris is de perfecte hond rond kinderen. Erg speels maar hij weet dat hij bij sommige kinderen iets rustiger moet zijn. Een hond waar ieder kind van kan houden!",
            'eigenaar_id' => 2,
            'eigenaar_name' => 'Gert Janus'
        ]);
    }
}
