<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str; 

class memberseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('student')->insert([
            'name'=>Str::random(10),
            'roll_number'=>rand(10000, 99999),
            'marks'=>rand(10000, 99999),
            'address'=>Str::random(11)

        ]);
    }
}
