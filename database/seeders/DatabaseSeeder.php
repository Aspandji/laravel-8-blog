<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        User::create([
            'name' => 'Nabila',
            'username' => 'bilbil',
            'email' => 'nabila@gmail.com',
            'password' => bcrypt(12345678),
            'is_admin' => true
        ]);

        // User::create([
        //     'name' => 'Anggun',
        //     'email' => 'anggun@gmail.com',
        //     'password' => bcrypt(12345)
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Desaign',
            'slug' => 'web-desaign'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur magnam ratione nulla impedit debitis animi',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur magnam ratione nulla impedit debitis animi sapiente, saepe rem quidem voluptas sit mollitia quae cupiditate blanditiis dolor et illum inventore nam qui molestias repellendus! Ab distinctio, reiciendis dolor est at quia nemo velit reprehenderit ex? Dolore fuga illum aperiam.</p><p>Delectus, veniam, ex omnis animi eum tempora corporis quasi ipsam quod consectetur sequi asperiores nostrum sed a reprehenderit laboriosam laborum maiores necessitatibus, iusto debitis. Vel provident impedit recusandae praesentium unde doloremque cupiditate, veniam dicta quam eaque minima porro tempore repellat corporis enim velit placeat labore.</p><p>voluptates culpa omnis repellendus a odio minima ducimus officia quibusdam iure quae amet est doloribus, ex, vitae consectetur pariatur, corrupti sed sapiente nihil! Laborum ut repellat nihil at quasi rem iusto recusandae nisi deserunt quae maxime blanditiis quis, nulla quo autem officiis, corporis iste dolor quod earum ratione! Culpa ullam nihil, rerum adipisci sapiente aspernatur ut laborum reiciendis architecto at animi quae sunt fugit accusamus iste et aperiam aliquid ad. Unde quam nulla praesentium ad at aut repellendus ea aliquid iusto expedita perspiciatis qui officiis, in porro molestiae non sint natus ducimus quae. Alias saepe nemo minus soluta. Sunt dignissimos porro, sit dolorum praesentium reprehenderit cupiditate.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur magnam ratione nulla impedit debitis animi',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur magnam ratione nulla impedit debitis animi sapiente, saepe rem quidem voluptas sit mollitia quae cupiditate blanditiis dolor et illum inventore nam qui molestias repellendus! Ab distinctio, reiciendis dolor est at quia nemo velit reprehenderit ex? Dolore fuga illum aperiam.</p><p>Delectus, veniam, ex omnis animi eum tempora corporis quasi ipsam quod consectetur sequi asperiores nostrum sed a reprehenderit laboriosam laborum maiores necessitatibus, iusto debitis. Vel provident impedit recusandae praesentium unde doloremque cupiditate, veniam dicta quam eaque minima porro tempore repellat corporis enim velit placeat labore.</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur magnam ratione nulla impedit debitis animi',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur magnam ratione nulla impedit debitis animi sapiente, saepe rem quidem voluptas sit mollitia quae cupiditate blanditiis dolor et illum inventore nam qui molestias repellendus! Ab distinctio, reiciendis dolor est at quia nemo velit reprehenderit ex? Dolore fuga illum aperiam.</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
