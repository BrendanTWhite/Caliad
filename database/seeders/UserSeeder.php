<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	DB::table('users')->insert([
             'name'     => 'Brendan',
             'email'    => 'brendan@thespia.com',
             'password' => '$2y$10$aFbyI6HwVi3hBxOSoDSRl.gGViFygsrUZQQpjA/2noVJYkP3TqDWy', // dingodingo
        ]);
    }
}
