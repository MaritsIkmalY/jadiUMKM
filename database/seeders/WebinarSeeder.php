<?php

namespace Database\Seeders;

use App\Models\Webinar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WebinarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('webinars')->insert(
            [
                [
                    'title' => 'Webinar Frontend',
                    'description' => 'Webinar khusus anak front end',
                    'photo' => 'assets/images/frontend.jpg',
                ],
                [
                    'title' => 'Webinar Mackend',
                    'description' => 'Webinar khusus anak back end',
                    'photo' => 'assets/images/backend_3.jpg',
                ],
                [
                    'title' => 'Webinar Mobile',
                    'description' => 'Webinar khusus anak mobile',
                    'photo' => 'assets/images/mobile.png',
                ]
            ]
        );
    }
}
