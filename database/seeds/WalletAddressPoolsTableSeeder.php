<?php

use Illuminate\Database\Seeder;

class WalletAddressPoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 2; $i++) {
            DB::table('wallet_address_pools')->insert([
                'wallet_address' => uniqid(100000, 900000)
            ]);
        }
    }
}
