<?php

namespace Database\Seeders;


use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(VideosSeeder::class);
        $this->call(WebinarSeeder::class);
        $this->call(ContentCreatorCategorySeeder::class);
    }
}
