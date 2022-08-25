<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Masukan;

class MasukanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Masukan::create(['email'=>'tes@gmail.com',
        // 'pesan'=> ' Kerjakan aja lah']);

        Masukan::factory(15)->create();
    }
}
