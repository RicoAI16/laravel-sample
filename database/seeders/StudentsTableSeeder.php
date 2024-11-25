<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('students')->insert([
            ['name' => 'John Doe', 'age' => 20, 'major' => 'Computer Science'],
            ['name' => 'Jane Smith', 'age' => 22, 'major' => 'Mathematics'],
            ['name' => 'Sam Wilson', 'age' => 21, 'major' => 'Engineering'],
        ]);
    }
}
