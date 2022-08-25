<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\SocialMedia;

class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // SocialMedia::create(['about_id' => 1,
        // 'social_media' => 'Twitter',
        // 'link' => 'link Twitter']);

        SocialMedia::factory(3)->create();
    }
}
