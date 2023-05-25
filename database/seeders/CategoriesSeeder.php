<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
                [
                    'name' => 'Startup',
                    'slug' => 'Startup',
                ],
                [
                    'name' => 'Life',
                    'slug' => 'life',
                ],
                [
                    'name' => 'Life Sesson',
                    'slug' => 'life sesson',
                ],
                [
                    'name' => 'Politics',
                    'slug' => 'politics',
                ],
                [
                    'name' => 'Travel',
                    'slug' => 'travel',
                ],
                [
                    'name' => 'Poetry',
                    'slug' => 'poetry',
                ],
                [
                    'name' => 'Enterpreuneurship',
                    'slug' => 'enterpreuneurship',
                ],
                [
                    'name' => 'Education',
                    'slug' => 'education',
                ],
                [
                    'name' => 'Health',
                    'slug' => 'health',
                ],
                [
                    'name' => 'LOve',
                    'slug' => 'love',
                ],
                [
                    'name' => 'Design',
                    'slug' => 'design',
                ],
                [
                    'name' => 'Writing',
                    'slug' => 'writing',
                ],
                [
                    'name' => 'Technology',
                    'slug' => 'technology',
                ],
        ]);
    }
}
