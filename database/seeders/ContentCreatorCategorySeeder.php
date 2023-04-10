<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentCreatorCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('content_creator_categories')->insert([
            [
                'name' => 'Design & Branding',
            ],
            [
                'name' => 'Video, Fotografi, & Audio',
            ],
            [
                'name' => 'Pemasaran & Periklanan',
            ],
            [
                'name' => 'Penulisan & Penerjemahan',
            ],
        ]);
    }
}
