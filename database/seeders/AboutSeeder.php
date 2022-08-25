<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::factory(10)->create();
        //
        // About::create(['isi' => "<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore tenetur ratione, sunt incidunt dignissimos fugit neque, modi vitae exercitationem quibusdam commodi inventore, ipsam saepe! Modi temporibus obcaecati saepe quod debitis?'</p> 
        // <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolore tenetur ratione, sunt incidunt dignissimos fugit neque, modi vitae exercitationem quibusdam commodi inventore, ipsam saepe! Modi temporibus obcaecati saepe quod debitis?</p>"]);
        
    }
}
