<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            AuthorSeeder::class,
            CompanySeeder::class,
            CategorySeeder::class,
            BookSeeder::class
        ]);
    }
}
