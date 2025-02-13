<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Models\Event;

class TesteEvento extends Seeder
{
    public function run()
    {
        DB::table('events')->insert([
            'name' => Str::random(10),
            'description' => Str::random(50),
            'date' => now(),
        ]);

        Event::factory(10)->create();
    }
}