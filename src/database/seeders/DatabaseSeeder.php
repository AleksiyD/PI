<?php

namespace Database\Seeders;

use App\Models\Request;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        \App\Models\User::factory(1)->create();

        if(App::environment('local')) {
            \App\Models\Client::factory(50)->has(Request::factory(3))->create();
        }
    }
}
