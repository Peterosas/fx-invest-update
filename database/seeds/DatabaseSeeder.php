<?php

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
        $this->call(UsersTableSeeder::class);
        $this->call(PackagesTableSeeder::class);
        $this->call(SiteSettingsTableSeeder::class);
        $this->call(WalletAddressPoolsTableSeeder::class);
    }
}
