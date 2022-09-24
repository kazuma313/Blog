<?php

namespace Database\Seeders;

use App\Models\Foto;
use Illuminate\Database\Seeder;
use \App\Models\Konten;
use App\Models\SocialMedia;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            AboutSeeder::class,
            FotoSeeder::class,
            KontenSeeder::class,
            MasukanSeeder::class,
            SocialMediaSeeder::class,
            UserSeeder::class
        ]);
    }
}
