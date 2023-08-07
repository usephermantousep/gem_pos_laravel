<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Branch::insert([
            [
                'name' => 'GEMPOS',
                'address' => 'jalan jalan'

            ],
            [
                'name' => 'CIDENG',
                'address' => 'jalan cideng'

            ],
            [
                'name' => 'TENGAH TANI',
                'address' => 'jalan tangah tani'

            ],
            [
                'name' => 'MEGU',
                'address' => 'jalan megu'
            ],
        ]);
    }
}
