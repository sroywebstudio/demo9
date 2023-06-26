<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\City;
use App\Models\Post;
use App\Models\User;
use App\Models\State;
use App\Models\Country;
use App\Models\ContactInfo;
use App\Models\PostCategory;
use App\Models\UserInfo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(5)->create();
        // PostCategory::factory(20)->create();
        // Post::factory(50)->create();
        // UserInfo::factory(5)->create();
        // ContactInfo::factory(10)->create();
        // Country::factory(50)->create();
        // State::factory(100)->create();
        // City::factory(200)->create();
        Admin::factory(5)->create();

        // $this->call([
        //     RoleSeeder::class
        // ]);
    }
}
