<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::insert([
            [
                'name' => 'GEMPOS',
                'info' => 'GEMPOS',
                'address' => 'jalan kinatagama rt 6 rw 2',
                'contact' => '081123123123'
            ],
            [
                'name' => 'ADREENA CHICKEN',
                'info' => 'info tentang company',
                'address' => 'jalan cideng no 123',
                'contact' => '081123123123'
            ],
        ]);
    }
}
