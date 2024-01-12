<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory(4)->create();

        Post::factory(30)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Desain',
            'slug' => 'web-desain'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        User::create([
            'name' => 'Khaeril Anwar',
            'username' => 'khaeril',
            'email' => 'khaerilanwar@gmail.com',
            'password' => bcrypt('12345'),
        ]);

        // User::create([
        //     'name' => 'Nihayatul Fathiyah',
        //     'email' => 'ayaaaa@gmail.com',
        //     'password' => bcrypt('12345'),
        // ]);

        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur ut numquam asperiores, nesciunt veritatis amet distinctio iure quo rem repellat possimus, alias dolorum, non culpa.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit autem dolore totam libero neque repellat obcaecati ipsum, fuga quas minima dignissimos ab voluptate eum nemo aliquid necessitatibus atque facilis quo quidem expedita assumenda. Vel neque quia iste est! Officia quidem culpa soluta sint optio hic non, autem, neque modi architecto, consectetur ipsa! A, ipsam. Quasi a provident amet, distinctio, odit corporis aliquid maiores cupiditate eos, pariatur quisquam est? Placeat voluptatibus, numquam sequi at harum eligendi qui ea nihil asperiores exercitationem laborum sed esse praesentium cum nemo!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias natus atque dolores corporis tempore a impedit! Aperiam debitis possimus voluptatum, incidunt, perferendis error ipsam, officia recusandae quos ad inventore eos? Consequuntur consectetur alias explicabo earum perspiciatis asperiores nobis fuga? Harum adipisci libero ratione ullam, iure dolores cupiditate a! Deserunt maxime harum maiores. Excepturi ipsa sint magni atque porro sed nesciunt, repellat id totam magnam. Ipsam sunt molestias, optio totam id tenetur labore quo sed quia ducimus eaque libero?</p>'
        // ]);

        // Post::create([
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur ut numquam asperiores, nesciunt veritatis amet distinctio iure quo rem repellat possimus, alias dolorum, non culpa.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit autem dolore totam libero neque repellat obcaecati ipsum, fuga quas minima dignissimos ab voluptate eum nemo aliquid necessitatibus atque facilis quo quidem expedita assumenda. Vel neque quia iste est! Officia quidem culpa soluta sint optio hic non, autem, neque modi architecto, consectetur ipsa! A, ipsam. Quasi a provident amet, distinctio, odit corporis aliquid maiores cupiditate eos, pariatur quisquam est? Placeat voluptatibus, numquam sequi at harum eligendi qui ea nihil asperiores exercitationem laborum sed esse praesentium cum nemo!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias natus atque dolores corporis tempore a impedit! Aperiam debitis possimus voluptatum, incidunt, perferendis error ipsam, officia recusandae quos ad inventore eos? Consequuntur consectetur alias explicabo earum perspiciatis asperiores nobis fuga? Harum adipisci libero ratione ullam, iure dolores cupiditate a! Deserunt maxime harum maiores. Excepturi ipsa sint magni atque porro sed nesciunt, repellat id totam magnam. Ipsam sunt molestias, optio totam id tenetur labore quo sed quia ducimus eaque libero?</p>'
        // ]);

        // Post::create([
        //     'category_id' => 3,
        //     'user_id' => 2,
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur ut numquam asperiores, nesciunt veritatis amet distinctio iure quo rem repellat possimus, alias dolorum, non culpa.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit autem dolore totam libero neque repellat obcaecati ipsum, fuga quas minima dignissimos ab voluptate eum nemo aliquid necessitatibus atque facilis quo quidem expedita assumenda. Vel neque quia iste est! Officia quidem culpa soluta sint optio hic non, autem, neque modi architecto, consectetur ipsa! A, ipsam. Quasi a provident amet, distinctio, odit corporis aliquid maiores cupiditate eos, pariatur quisquam est? Placeat voluptatibus, numquam sequi at harum eligendi qui ea nihil asperiores exercitationem laborum sed esse praesentium cum nemo!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias natus atque dolores corporis tempore a impedit! Aperiam debitis possimus voluptatum, incidunt, perferendis error ipsam, officia recusandae quos ad inventore eos? Consequuntur consectetur alias explicabo earum perspiciatis asperiores nobis fuga? Harum adipisci libero ratione ullam, iure dolores cupiditate a! Deserunt maxime harum maiores. Excepturi ipsa sint magni atque porro sed nesciunt, repellat id totam magnam. Ipsam sunt molestias, optio totam id tenetur labore quo sed quia ducimus eaque libero?</p>'
        // ]);

        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur ut numquam asperiores, nesciunt veritatis amet distinctio iure quo rem repellat possimus, alias dolorum, non culpa.',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit autem dolore totam libero neque repellat obcaecati ipsum, fuga quas minima dignissimos ab voluptate eum nemo aliquid necessitatibus atque facilis quo quidem expedita assumenda. Vel neque quia iste est! Officia quidem culpa soluta sint optio hic non, autem, neque modi architecto, consectetur ipsa! A, ipsam. Quasi a provident amet, distinctio, odit corporis aliquid maiores cupiditate eos, pariatur quisquam est? Placeat voluptatibus, numquam sequi at harum eligendi qui ea nihil asperiores exercitationem laborum sed esse praesentium cum nemo!</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias natus atque dolores corporis tempore a impedit! Aperiam debitis possimus voluptatum, incidunt, perferendis error ipsam, officia recusandae quos ad inventore eos? Consequuntur consectetur alias explicabo earum perspiciatis asperiores nobis fuga? Harum adipisci libero ratione ullam, iure dolores cupiditate a! Deserunt maxime harum maiores. Excepturi ipsa sint magni atque porro sed nesciunt, repellat id totam magnam. Ipsam sunt molestias, optio totam id tenetur labore quo sed quia ducimus eaque libero?</p>'
        // ]);
    }
}
