<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Foto;

class FotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    //     Foto::create(['about_id' => 1,
    //     'konten_id' => 1,

    //     'foto' => 'link foto about 3 ', 
       
    // ]);


        

    Foto::factory(10)->create();
    }
}
