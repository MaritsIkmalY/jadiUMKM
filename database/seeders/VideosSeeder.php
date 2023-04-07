<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VideosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('videos')->insert([
            [
                'link' => 'https://www.youtube.com/embed/SoCuPpCFj7Y',
                'title' => 'Laravel Controller',
                'subtitle' => 'Bermain',
                'is_subscribe' => false,
            ],
            [
                'link' => 'https://www.youtube.com/embed/SoCuPpCFj7Y',
                'title' => 'Laravel Controller',
                'subtitle' => 'Bermain',
                'is_subscribe' => false,
            ],
        ]);
    }
}
