<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cruds')->insert([
            'name' => 'Saba',
            'surname' => 'Gogatishvili',
            'is_hired' => 1,
        ]);
    }
}
