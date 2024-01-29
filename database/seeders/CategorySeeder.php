<?php

namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;
class NavigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();
        $category = [
            [
                'name' => 'MEN',
            ],
            [
                'name' => 'WOMEN',
                'parent_id' => 0,
                'index' => 2,
                'href' => '/'
            ],
            [
                'name' => 'KIDS',
                'parent_id' => 0,
                'index' => 3,
                'href' => '/'
            ],
            [
                'name' => 'BEAUTY',
                'parent_id' => 0,
                'index' => 4,
                'href' => '/'
            ]
        ];

        Navigation::insert($category);
    }
}