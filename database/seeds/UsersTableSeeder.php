<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        DB::table('users')->insert([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'username' => config('company.users.admin.username'),
            'ref_id' => config('company.users.admin.default_sponsor'),
            'sponsor_id' => null,
            'phone' => '080xxxxx',
            'role' => config('company.roles.admin.role'),
            'email' => config('company.users.admin.email'),
            'email_verified_at' => now(),
            'password' => Hash::make(config('company.users.admin.password')),
            'created_at' => now(),
            'updated_at' => now(),
            'country' => 'NG',
        ]);
        
        DB::table('users')->insert([
            'first_name' => 'Demo',
            'last_name' => 'Demo',
            'username' => config('company.users.demo.username'),
            'ref_id' => config('company.users.admin.default_sponsor'),
            'sponsor_id' => null,
            'phone' => '090xxxxx',
            'role' => config('company.roles.user.role'),
            'email' => config('company.users.demo.email'),
            'email_verified_at' => now(),
            'password' => Hash::make(config('company.users.demo.password')),
            'created_at' => now(),
            'updated_at' => now(),
            'country' => 'NG',
        ]);
        
        DB::table('users')->insert([
            'first_name' => 'Light',
            'last_name' => 'Okere',
            'username' => 'light',
            'ref_id' => config('company.users.admin.default_sponsor'),
            'sponsor_id' => null,
            'phone' => '090343xxx',
            'role' => config('company.roles.user.role'),
            'email' => 'okerelight@yahoo.com',
            'email_verified_at' => now(),
            'password' => Hash::make(config('okerelight')),
            'created_at' => now(),
            'updated_at' => now(),
            'country' => 'NG',
        ]);
        
        
    }
}
