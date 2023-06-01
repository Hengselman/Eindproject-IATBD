<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class KatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("huisdier")->insert([
            'name' => "Droppie",
            'soort' => "Kat",
            'image' => '/img/kat_droppie.webp',
            'description' => "Droppie is een hele schattige schone kat. Ze vindt eten vooral heel lekker en dat laat ze weten ook door heel hard te miauwen!",
            'eigenaar_id' => 2
        ]);

        DB::table("huisdier")->insert([
            'name' => "Garfield",
            'soort' => "Kat",
            'image' => '/img/kat_garfield.webp',
            'description' => "Onze oranje kater is een lekker knuffelbeestje. Hij ligt graag in de vensterbank te zonnen als hij 5 minuutjes heeft gespeeld.",
            'eigenaar_id' => 2
        ]);

        DB::table("huisdier")->insert([
            'name' => "Ollie",
            'soort' => "Kat",
            'image' => '/img/kat_ollie.webp',
            'description' => "Ollie is een nieuwsgierige kat, vooral naar andere katten. Gelukkig kan hij het met andere diertjes altijd goed vinden.",
            'eigenaar_id' => 2
        ]);

        DB::table("huisdier")->insert([
            'name' => "Prinses",
            'soort' => "Kat",
            'image' => '/img/kat_prinses.webp',
            'description' => "Prinses is, zoals de naam al doet klinken, een prinsesje. Ze wilt graag gevoerd, geaaid en geknuffeld worden wanneer het haar uitkomt.",
            'eigenaar_id' => 2
        ]);

        DB::table("huisdier")->insert([
            'name' => "Sjaak",
            'soort' => "Kat",
            'image' => '/img/kat_sjaak.webp',
            'description' => "We hebben Sjaak gevonden in een oude schuur van een boer en sindsdien wilt hij niet meer weg. Hij is heel lief maar kan wel erg druk zijn.",
            'eigenaar_id' => 2
        ]);
    }
}
