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
                'link' => 'https://www.youtube.com/embed/8g1H3ipDNOs',
                'title' => 'Bangun Bisnis dari 0',
                'subtitle' => 'admin',
                'is_subscribe' => false,
            ],
            [
                'link' => 'https://www.youtube.com/embed/kctqBGJE2_s',
                'title' => '10 Cara Bisnis Kecil Jadi Besar',
                'subtitle' => 'admin',
                'is_subscribe' => false,
            ],
            [
                'link' => 'https://www.youtube.com/embed/jC6undwFl-c',
                'title' => 'Tips Marketing Bisnis',
                'subtitle' => 'admin',
                'is_subscribe' => false,
            ],
        ]);
    }
}
