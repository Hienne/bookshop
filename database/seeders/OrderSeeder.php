<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 25; $i++) { 
    		DB::table('orders')->insert(
		         	[
		         		[
				            'user_id' => rand(1, 4),
				            'order_status' => 'Đang xử lý đơn hàng',
				            'shipping_address' => 'Nhà số '.$i.' Cầu Giấy, Hà Nội',
				            'phoneReceiver' =>'09000'.rand(0,10).rand(0,10).rand(0,10).rand(0,10).rand(0,10),
							'nameReceiver' => 'Tên người nhận '.$i,
							'shipping_fee' => rand(0,1)*20000,
							'created_at' => new DateTime(),
							'updated_at' => new DateTime()
				        ],
		         	]
	         	);
    	}
    }
}
