<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ParkietTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("huisdier")->insert([
            'name' => "Bliss",
            'soort' => "Parkiet",
            'image' => '/img/parkiet_bliss.jpg',
            'description' => "Bliss is een stille vogel die weinig aandacht nodig heeft. Hij kan ook een paar trukjes.",
            'eigenaar_id' => 2,
            'eigenaar_name' => "Gert Janus"
        ]);

        DB::table("huisdier")->insert([
            'name' => "Donder",
            'soort' => "Parkiet",
            'image' => '/img/parkiet_donder.jpg',
            'description' => "Donder is een ontdeugende vogel die graag dingen van je afpakt. Soms vervelend maar vaak is het heel erg lief.",
            'eigenaar_id' => 2,
            'eigenaar_name' => "Gert Janus"
        ]);

        DB::table("huisdier")->insert([
            'name' => "George",
            'soort' => "Parkiet",
            'image' => '/img/parkiet_george.jpg',
            'description' => "George is een rustige parkiet die soms met je probeert te praten. Als je terugpraat vindt hij dat heel erg leuk!",
            'eigenaar_id' => 2,
            'eigenaar_name' => "Gert Janus"
        ]);

        DB::table("huisdier")->insert([
            'name' => "Google",
            'soort' => "Parkiet",
            'image' => '/img/parkiet_google.jpg',
            'description' => "Google is echt een lief vogeltje maar wel erg druk. Je kan hem makkelijk uit zijn kooi laten zodat hij door de kamer kan vliegen.",
            'eigenaar_id' => 2,
            'eigenaar_name' => "Gert Janus"
        ]);

        DB::table("huisdier")->insert([
            'name' => "Rio",
            'soort' => "Parkiet",
            'image' => '/img/parkiet_rio.jpg',
            'description' => "Rio is een kleurrijke vogel met een energieke persoonlijkheid. Hij kan ook praten.",
            'eigenaar_id' => 2,
            'eigenaar_name' => "Gert Janus"
        ]);
    }
}
