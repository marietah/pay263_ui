<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaction;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\Transaction::factory(500)->create();
        // \App\Models\User::factory(10)->create();
    }
}
