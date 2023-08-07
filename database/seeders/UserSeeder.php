<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'admin',
                'password' => bcrypt('gempos123'),
                'role_id' => 1,
                'branch_id' => 1,
                'username' => 'usephermanto'
            ],
            [
                'name' => 'jun',
                'password' => bcrypt('gempos123'),
                'role_id' => 2,
                'branch_id' => 2,
                'username' => 'junjunan'
            ]
        ]);
    }
}
