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
                'author_name' => '2.1/2 Bạn Tốt'
            ],
            [ 
                'author_name' => 'A.J.Hoge'
            ],
            [ 
                'author_name' => 'Accototo'
            ],
            [ 
                'author_name' => 'Adam Khoo & Gary Lee'
            ],
            [ 
                'author_name' => 'Adam Khoo'
            ],
            [ 
                'author_name' => 'Agatha Christie'
            ],
            [ 
                'author_name' => 'Akiko Hayashi'
            ],
            [ 
                'author_name' => 'Alain de Botton'
            ],
            [ 
                'author_name' => 'Alan Phan '
            ],
            [ 
                'author_name' => 'Alan Watts'
            ],
            [ 
                'author_name' => 'Allan & Barbara Pease'
            ],
            [ 
                'author_name' => 'Alphabooks biên soạn'
            ],
            [ 
                'author_name' => 'Anagarika Govinda'
            ],
            [ 
                'author_name' => 'Andrea Hirata'
            ],
            [ 
                'author_name' => 'Andrew Spooner'
            ],
            [ 
                'author_name' => 'Anh Nguyễn'
            ],
            [ 
                'author_name' => 'Anh Thư - Thu Giang'
            ],
            [ 
                'author_name' => 'Ann Weil'
            ],
            [ 
                'author_name' => 'Anthony Robbins'
            ],
            [ 
                'author_name' => 'Anthony Weston'
            ]
        ]);
    }
}
