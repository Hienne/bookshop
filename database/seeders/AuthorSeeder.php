<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('authors')->insert([
            [ 
                'author_name' => '2.1/2 Bạn Tốt',
                'author_image' => null,
            ],
            [ 
                'author_name' => 'A.J.Hoge',
                'author_image' => '/storage/author/A_J Hoge.jpg'
            ],
            [ 
                'author_name' => 'Accototo',
                'author_image' => null
            ],
            [ 
                'author_name' => 'Adam Khoo & Gary Lee',
                'author_image' => null
            ],
            [ 
                'author_name' => 'Adam Khoo',
                'author_image' => '/storage/author/adam-khoo.jpg'
            ],
            [ 
                'author_name' => 'Agatha Christie',
                'author_image' => '/storage/author/agatha_christie.jpg'
            ],
            [ 
                'author_name' => 'Akiko Hayashi',
                'author_image' => '/storage/author/akiko_hayashi.jpg'
            ],
            [ 
                'author_name' => 'Alain de Botton',
                'author_image' => '/storage/author/alain_de_botton.jpg'
            ],
            [ 
                'author_name' => 'Alan Phan ',
                'author_image' => '/storage/author/alan_phan.jpg'
            ],
            [ 
                'author_name' => 'Alan Watts',
                'author_image' => '/storage/author/alanwatts.jpg'
            ],
            [ 
                'author_name' => 'Allan & Barbara Pease',
                'author_image' => null
            ],
            [ 
                'author_name' => 'Alphabooks biên soạn',
                'author_image' => null
            ],
            [ 
                'author_name' => 'Anagarika Govinda',
                'author_image' => '/storage/author/anagarika_covinda.jpg'
            ],
            [ 
                'author_name' => 'Andrea Hirata',
                'author_image' => '/storage/author/andrea-hirata.jpg'
            ],
            [ 
                'author_name' => 'Andrew Spooner',
                'author_image' => null
            ],
            [ 
                'author_name' => 'Anh Nguyễn',
                'author_image' => null
            ],
            [ 
                'author_name' => 'Anh Thư - Thu Giang',
                'author_image' => null
            ],
            [ 
                'author_name' => 'Ann Weil',
                'author_image' => null
            ],
            [ 
                'author_name' => 'Anthony Robbins',
                'author_image' => '/storage/author/Tony-Robbins.jpg'
            ],
            [ 
                'author_name' => 'Anthony Weston',
                'author_image' => '/storage/author/anthony_weston.jpg'
            ]
        ]);
    }
}
