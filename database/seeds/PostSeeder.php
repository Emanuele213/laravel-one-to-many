<?php

use App\Category;
use App\Post;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $categories = Category::all('id')->all();
        for ($i = 0; $i < 100; $i++) {
            $title = $faker->words(rand(3, 7), true);
              // $loremImages = Storage::files('lorempicsum'); // TODO: risolvere il problema dei permessi delle immagini
             // $img_path = Storage::put('uploads', $faker->randomElement($loremImages));
            Post::create([
                'category_id'   => $faker->randomElement($categories)->id,
                'slug'          => Post::getSlug($title),
                'title'         => $title,
                'image'         => 'https://picsum.photos/id/'.rand(0, 1000) . '/500/400',
                // 'uploaded_img'  => $img_path,
                'content'       => $faker->paragraphs(rand(1, 10), true),
                'excerpt'       => $faker->paragraph(),
            ]);
        }

        //Funzione con getSlug che si trova nel model

        // for ($i = 0; $i < 100; $i++) {
        //     // $title = $faker->words(rand(3, 7), true);
        //     $title = 'Ciao a Tutti';
        //     Post::create([
        //         'slug'      => Post::getSlug($title),
        //         'title'     => $title,
        //         'image'     => 'https://picsum.photos/id/'. rand(0, 1000) .'/500/400',
        //         'content'   => $faker->paragraphs(rand(1, 10), true),
        //         'excerpt'   => $faker->paragraph(),
        //     ]);
        // }
    }
}
