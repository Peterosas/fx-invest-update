<?php

use Illuminate\Database\Seeder;

class SiteSettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('site_settings')->insert([
            'first_name' => 'Lucy',
            'last_name' => 'Smith',
            'ref_id' => User::generateRefId(),
            'sponsor_id' => null,
            'role' => 'admin',
            'email' => config('company.admins.second.email'),
            'email_verified_at' => now(),
            'password' => Hash::make(config('company.admins.second.password')),
            'created_at' => now(),
            'updated_at' => now()
        ]);*/
    }
}
