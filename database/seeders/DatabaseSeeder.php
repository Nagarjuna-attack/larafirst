<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Kategori;
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
        //\App\Models\User::factory(10)->create();
        User::create([
            'name'     => 'Afandi',
            'email'    => 'afandi@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Kategori::create([
            'name' => 'Jaringan',
            'slug' => 'jaringan'
        ]);

        Kategori::create([
            'name' => 'Multimedia',
            'slug' => 'multimedia'
        ]);

        Kategori::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);

        Post::create([
            'kategori_id' => 1,
            'user_id'     => 1,
            'title'       => 'Post Pertama',
            'slug'        => 'post-pertama',
            'excerpt'     => 'Ini adalah post pertama yang saya gunakan untuk menambahkan file dan nama yang akan saya gunakan dengan baik dan juga betul, karena dilihat dari kondisi parah yang menyelimuti hari ini',
            'body'        => 'kau tidak bisa jauh dari dunia ini hanya dengan mengandalkan orang lain. orang-orang, mereka akan loyal hingga semuanya menjadi tidak berguna lagi dan kacau akan hal itu. Mengenai pada bagian yang akan kami gunakan, disitu terkadang kami menemukan semacam tempat yang cukup berbahaya dalam menjalankan aturan dan juga beberapa hal yang selalu kami gunakan untuk menambahkan beban yang ada. kecuali kami sudah menjadi kehilangan bagian pada hal yang membuat semua ini begitu kuat dan juga kacau. Dikarenakan kami selalu dapat melampaui apapun yang kami inginkan disini. itu sudah menjadi hal lumrah ketika bagian itu telah menghilang dengan sedemikian rupanya.' 
        ]);


        Post::create([
            'kategori_id' => 2,
            'user_id'     => 1,
            'title'       => 'Post Kedua',
            'slug'        => 'post-kedua',
            'excerpt'     => 'Ini adalah post pertama yang saya gunakan untuk menambahkan file dan nama yang akan saya gunakan dengan baik dan juga betul, karena dilihat dari kondisi parah yang menyelimuti hari ini',
            'body'        => 'kau tidak bisa jauh dari dunia ini hanya dengan mengandalkan orang lain. orang-orang, mereka akan loyal hingga semuanya menjadi tidak berguna lagi dan kacau akan hal itu. Mengenai pada bagian yang akan kami gunakan, disitu terkadang kami menemukan semacam tempat yang cukup berbahaya dalam menjalankan aturan dan juga beberapa hal yang selalu kami gunakan untuk menambahkan beban yang ada. kecuali kami sudah menjadi kehilangan bagian pada hal yang membuat semua ini begitu kuat dan juga kacau. Dikarenakan kami selalu dapat melampaui apapun yang kami inginkan disini. itu sudah menjadi hal lumrah ketika bagian itu telah menghilang dengan sedemikian rupanya.' 
        ]);


        Post::create([
            'kategori_id' => 3,
            'user_id'     => 1,
            'title'       => 'Post Ketiga',
            'slug'        => 'post-ketiga',
            'excerpt'     => 'Ini adalah post pertama yang saya gunakan untuk menambahkan file dan nama yang akan saya gunakan dengan baik dan juga betul, karena dilihat dari kondisi parah yang menyelimuti hari ini',
            'body'        => 'kau tidak bisa jauh dari dunia ini hanya dengan mengandalkan orang lain. orang-orang, mereka akan loyal hingga semuanya menjadi tidak berguna lagi dan kacau akan hal itu. Mengenai pada bagian yang akan kami gunakan, disitu terkadang kami menemukan semacam tempat yang cukup berbahaya dalam menjalankan aturan dan juga beberapa hal yang selalu kami gunakan untuk menambahkan beban yang ada. kecuali kami sudah menjadi kehilangan bagian pada hal yang membuat semua ini begitu kuat dan juga kacau. Dikarenakan kami selalu dapat melampaui apapun yang kami inginkan disini. itu sudah menjadi hal lumrah ketika bagian itu telah menghilang dengan sedemikian rupanya.' 
        ]);


        Post::create([
            'kategori_id' => 1,
            'user_id'     => 1,
            'title'       => 'Post Keempat',
            'slug'        => 'post-keempat',
            'excerpt'     => 'Ini adalah post pertama yang saya gunakan untuk menambahkan file dan nama yang akan saya gunakan dengan baik dan juga betul, karena dilihat dari kondisi parah yang menyelimuti hari ini',
            'body'        => 'kau tidak bisa jauh dari dunia ini hanya dengan mengandalkan orang lain. orang-orang, mereka akan loyal hingga semuanya menjadi tidak berguna lagi dan kacau akan hal itu. Mengenai pada bagian yang akan kami gunakan, disitu terkadang kami menemukan semacam tempat yang cukup berbahaya dalam menjalankan aturan dan juga beberapa hal yang selalu kami gunakan untuk menambahkan beban yang ada. kecuali kami sudah menjadi kehilangan bagian pada hal yang membuat semua ini begitu kuat dan juga kacau. Dikarenakan kami selalu dapat melampaui apapun yang kami inginkan disini. itu sudah menjadi hal lumrah ketika bagian itu telah menghilang dengan sedemikian rupanya.' 
        ]);


        Post::create([
            'kategori_id' => 2,
            'user_id'     => 1,
            'title'       => 'Post Kelima',
            'slug'        => 'post-kelima',
            'excerpt'     => 'Ini adalah post pertama yang saya gunakan untuk menambahkan file dan nama yang akan saya gunakan dengan baik dan juga betul, karena dilihat dari kondisi parah yang menyelimuti hari ini',
            'body'        => 'kau tidak bisa jauh dari dunia ini hanya dengan mengandalkan orang lain. orang-orang, mereka akan loyal hingga semuanya menjadi tidak berguna lagi dan kacau akan hal itu. Mengenai pada bagian yang akan kami gunakan, disitu terkadang kami menemukan semacam tempat yang cukup berbahaya dalam menjalankan aturan dan juga beberapa hal yang selalu kami gunakan untuk menambahkan beban yang ada. kecuali kami sudah menjadi kehilangan bagian pada hal yang membuat semua ini begitu kuat dan juga kacau. Dikarenakan kami selalu dapat melampaui apapun yang kami inginkan disini. itu sudah menjadi hal lumrah ketika bagian itu telah menghilang dengan sedemikian rupanya.' 
        ]);


        Post::create([
            'kategori_id' => 3,
            'user_id'     => 1,
            'title'       => 'Post Keenam',
            'slug'        => 'post-keenam',
            'excerpt'     => 'Ini adalah post pertama yang saya gunakan untuk menambahkan file dan nama yang akan saya gunakan dengan baik dan juga betul, karena dilihat dari kondisi parah yang menyelimuti hari ini',
            'body'        => 'kau tidak bisa jauh dari dunia ini hanya dengan mengandalkan orang lain. orang-orang, mereka akan loyal hingga semuanya menjadi tidak berguna lagi dan kacau akan hal itu. Mengenai pada bagian yang akan kami gunakan, disitu terkadang kami menemukan semacam tempat yang cukup berbahaya dalam menjalankan aturan dan juga beberapa hal yang selalu kami gunakan untuk menambahkan beban yang ada. kecuali kami sudah menjadi kehilangan bagian pada hal yang membuat semua ini begitu kuat dan juga kacau. Dikarenakan kami selalu dapat melampaui apapun yang kami inginkan disini. itu sudah menjadi hal lumrah ketika bagian itu telah menghilang dengan sedemikian rupanya.' 
        ]);

    }
}
