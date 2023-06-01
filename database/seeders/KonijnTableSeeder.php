<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class KonijnTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("huisdier")->insert([
            'name' => "Bruintje",
            'soort' => "Konijn",
            'image' => '/img/konijn_bruintje.jpg',
            'description' => "Bruintje is een heel lief konijntje. Hij hupt graag rond in zijn hok!",
            'eigenaar_id' => 2
        ]);

        DB::table("huisdier")->insert([
            'name' => "Dochter",
            'soort' => "Konijn",
            'image' => '/img/konijn_dochter.jpg',
            'description' => "Dit is mijn dochter. Kan iemand haar alsjeblieft in de gaten houden, dit loopt uit de hand.",
            'eigenaar_id' => 2
        ]);

        DB::table("huisdier")->insert([
            'name' => "Flappie",
            'soort' => "Konijn",
            'image' => '/img/konijn_flappie.jpg',
            'description' => "We hebben Flappie gekregen van een collega op werk. Echt een lieverdje!",
            'eigenaar_id' => 2
        ]);

        DB::table("huisdier")->insert([
            'name' => "Knuffeltje",
            'soort' => "Konijn",
            'image' => '/img/konijn_knuffeltje.jpg',
            'description' => "Dit is mijn lieve konijnknuffeltje. Hij helpt altijd om mij in slaap te brengen.",
            'eigenaar_id' => 2
        ]);

        DB::table("huisdier")->insert([
            'name' => "Snoes",
            'soort' => "Konijn",
            'image' => '/img/konijn_snoes.jpg',
            'description' => "Snoes is de aaaallerliefste! Kijk dan naar zijn oortjes! Hij is echt de leukste.",
            'eigenaar_id' => 2
        ]);
    }
}
