<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i < 5; $i++) {
            DB::table('users')->insert([
                'name' =>'Người dùng '.$i,
                'email' => 'member'.$i.'@gmail.com',
                'password' => bcrypt('123456'),
                'phone' => 1664872279,
                'address' => 'Hà Nội',
                'remember_token' => Str::random(10),
                'created_at' =>new DateTime(),
                'updated_at' => new DateTime()
            ]);
        }
    }
}
