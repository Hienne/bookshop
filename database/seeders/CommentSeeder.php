<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 50; $i++) { 
	    	DB::table('comments')->insert(
			         	[
			         		[
					            'book_id' =>  rand(1, 42),
					            'user_id' => rand(1, 4),
					            'title' => 'Một cuốn sách rất đáng đọc '.$i,
					            'content' => 'Sách hay lắm :)) - comment số '.$i,
					            'rate' => rand(2,5),
					            'created_at' =>new DateTime(),
								'updated_at' => new DateTime()
					        ]
			         	]
		         	);
    	}
    }
}
