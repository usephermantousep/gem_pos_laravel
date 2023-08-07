<?php

namespace Database\Seeders;

use App\Models\UserBranch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserBranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserBranch::insert([
            [
                'user_id' => 1,
                'branch_id' => 1,
            ],
            [
                'user_id' => 2,
                'branch_id' => 2,
            ],
            [
                'user_id' => 2,
                'branch_id' => 3,
            ],
            [
                'user_id' => 2,
                'branch_id' => 4,
            ],
        ]);
    }
}
