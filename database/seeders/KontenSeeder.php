<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Konten;

class KontenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Konten::create([
            'judul' => 'Ini adalah percobaan kelima',
            'about_id' => 1,
            'slug' => 'percobaan-kelima',
            'excerpt' => "excerpt untuk menampilkan pada halaman home dan ini adalah excerpt",

            'isi' => "<p> ipsum dolor sit amet consectetur, adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing
    elit. Autem, ex impedit obcaecati velit iste quibusdam quidem eos accusamus architecto inventore, eligendi
    perferendis, exercitationem cupiditate repellat facere veniam nihil dicta quasi?</p>
<p> Blanditiis repellendus doloribus eaque ut! Recusandae nulla
    eius eveniet maiores beatae aliquam ab officiis consectetur.</p>
<p>Nisi fugit totam aut voluptas maiores inventore vel
    nesciunt quaerat? Beatae accusantium nemo eius placeat inventore dolor.</p>
<p> ipsum dolor sit amet consectetur, adipisicing elit.</p>
<p> Blanditiis repellendus doloribus eaque ut! Recusandae nulla
    eius eveniet maiores beatae aliquam ab officiis consectetur.</p>
<p>Nisi fugit totam aut voluptas maiores inventore vel
    nesciunt quaerat? Beatae accusantium nemo eius placeat inventore dolor.</p>"
        ]);

        Konten::factory(10)->create();
    }
}
