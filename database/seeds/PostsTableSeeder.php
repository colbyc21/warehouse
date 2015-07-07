<?php

use Illuminate\Database\Seeder;
Use App\Post;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Remove any existing data


        $faker = Faker\Factory::create();

        // Generate some dummy data
        for($i=0; $i<30; $i++) {
            Post::create([
                'title' => $faker->sentence(3),
                'content' => $faker->paragraph(5),
                'tags' => join(',', $faker->words(5))
            ]);
        }
    }

}

