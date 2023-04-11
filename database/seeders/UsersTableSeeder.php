<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            'name' => 'Devin Stigter',
            'email' => 'Devin.voorbeeld@gmail.com',
            'password' => bcrypt("password"),
            'role' => 'Admin',
            'profile_image' => 'img/atleet_devin.jpg',
            'profile_info' => 'Hoi ik ben Devin. Ik ben in het dagelijks leven een full-time atleet dus heb soms een oppas nodig voor mijn lieve beessies.'
        ]);

        DB::table("users")->insert([
            'name' => 'Gert Janus',
            'email' => 'gertjanus@gmail.com',
            'password' => bcrypt("password"),
        ]);
    }
}
