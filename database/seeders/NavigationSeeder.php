<?php

namespace Database\Seeders;
use App\Models\Navigation;
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
        DB::table('navigation')->delete();
        $menu = [
            [
                'name' => 'MEN',
                'parent_id' => 0,
                'index' => 1,
                'href' => '/'
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

        Navigation::insert($menu);
    }
}