<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            ['name' => '山田 太郎', 'age' => 20, 'major' => '情報学科'],
            ['name' => '佐藤 花子', 'age' => 21, 'major' => '経済学科'],
        ]);
    }
}
