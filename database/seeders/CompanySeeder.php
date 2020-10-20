<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            [
                'company_name' =>  'First News - Trí Việt'
                 
            ],
            [
                'company_name' =>  'Công ty Văn hóa Hương Trang'
            ],
            [
                'company_name' =>  'Skybooks'
            ],
            [
                'company_name' =>  'Người Trẻ Việt'
            ],
            [
                'company_name' =>  'Quảng Văn'
            ],
            [
                'company_name' =>  'NXB Trẻ'
            ],
            [
                'company_name' =>  'Limbooks'
            ],
            [
                'company_name' =>  'Đinh Tị'
            ],
            [
                'company_name' =>  'Alphabooks'
            ],
            [
                'company_name' =>  'DT Books'
            ],
            [
                'company_name' =>  'NXB Tổng Hợp'
            ],
            [
                'company_name' =>  'Công Ty CP Văn Hóa Nhân Văn'
            ],
            [
                'company_name' =>  'Công Ty TNHH Thương Mại STK'
            ],
            [
                'company_name' =>  'MCBooks'
            ],
            [
                'company_name' =>  'Minh Long'
            ]
        ]);
    }
}
