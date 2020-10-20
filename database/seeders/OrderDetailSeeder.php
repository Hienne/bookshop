<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 35; $i++) { 
	    	DB::table('order_details')->insert(
			         	[
			         		[
					            'order_id' =>  rand(1,25),
					            'book_id' => rand(1,42),
					            'price' => rand(1,15)*10000,
					            'quality' => rand(1,5),
					        ],
			         	]
		         	); 	
    	}
    }
}
