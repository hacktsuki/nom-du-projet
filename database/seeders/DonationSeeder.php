<?php

namespace Database\Seeders;

use App\Models\Donation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DonationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $donation1 = Donation::create([
            'amount' => 100,
            'details' => 'Test donation 1',
            'donator_id' => 2,
            'receiver_id' => 1,
            'receiver_type' => 'platform'
        ]);

        $donation2 = Donation::create([
            'amount' => 200,
            'details' => 'Test donation 2',
            'donator_id' => 2,
            'receiver_id' => 1,
            'receiver_type' => 'platform'
        ]);

        $donation3 = Donation::create([
            'amount' => 300,
            'details' => 'Test donation 3',
            'donator_id' => 2,
            'receiver_id' => 3,
            'receiver_type' => 'consultant'
        ]);
    }
}
