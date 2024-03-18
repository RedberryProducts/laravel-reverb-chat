<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rooms')->insert([
            ['name' => 'Room 1'],
            ['name' => 'Room 2'],
            ['name' => 'Room 3'],
            ['name' => 'Room 4'],
            ['name' => 'Room 5'],
        ]);

    }
}
