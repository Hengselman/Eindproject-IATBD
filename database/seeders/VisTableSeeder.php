<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class VisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("huisdier")->insert([
            'name' => "Axel",
            'soort' => "Vis",
            'image' => '/img/vis_axel.jpg',
            'description' => "Een lief beessie. Kan heel lief naar je lachen vanuit zijn aquarium.",
            'eigenaar_id' => 3
        ]);

        DB::table("huisdier")->insert([
            'name' => "Blacka",
            'soort' => "Vis",
            'image' => '/img/vis_blacka.jpg',
            'description' => "Blacka is een hele speciale vis omdat zijn broertjes allemaal niet zwart waren.",
            'eigenaar_id' => 4
        ]);

        DB::table("huisdier")->insert([
            'name' => "Blub",
            'soort' => "Vis",
            'image' => '/img/vis_blub.jpg',
            'description' => "Blub houdt van bubbeltjes.",
            'eigenaar_id' => 4
        ]);

        DB::table("huisdier")->insert([
            'name' => "Nemo",
            'soort' => "Vis",
            'image' => '/img/vis_nemo.jpg',
            'description' => "Ik weet het, een erg originele naam. Maar de naam is heel leuk en hij deze vis is niet kwijt!",
            'eigenaar_id' => 4
        ]);

        DB::table("huisdier")->insert([
            'name' => "Tijgertje",
            'soort' => "Vis",
            'image' => '/img/vis_tijgertje.jpg',
            'description' => "Tijgertje houdt van stoeien op het strand of in het zwembad. Niet de deur open laten staan want dan rent hij weg!",
            'eigenaar_id' => 1
        ]);
    }
}
