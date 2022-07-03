<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use app\Http\Controllers\ItemController;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('items')->insert([
            [
                'name' => 'karrige',
                "price" => "42.12",
                "code" => " Y523201",
                "image" => "img\image28.png",
            ],
            [
                'name' => 'karrite2',
                "price" => "45.05",
                "code" => " Y523201",
                "image" => "https://www.familyhandyman.com/wp-content/uploads/2022/02/Danish-modern-chair-FH22MAR_616_53_078.jpg?resize=768,768",
            ],
            [
                'name' => 'karrike3',
                "price" => "42",
                "code" => " Y48552D",
                "image" => "https://m.media-amazon.com/images/I/81Ko6FsKxuL._AC_SL1500_.jpg",
            ],
            [
                'name' => 'karrike4',
                "price" => "54",
                "code" => " YE4584522",
                "image" => "https://m.media-amazon.com/images/I/41ARNJgB3bL._SS1000_.jpg",
            ],
            [
                'name' => 'karrike5',
                "price" => "49",
                "code" => " Y48522SS",
                "image" => "https://m.media-amazon.com/images/I/71XsMBlgsAL._AC_SL1500_.jpg",
            ],
            [
                'name' => 'karrike6',
                "price" => "122",
                "code" => " Y555589",
                "image" => "https://m.media-amazon.com/images/I/61uR60drLoL._AC_SL1200_.jpg",
            ],
        ]);
    }
}

