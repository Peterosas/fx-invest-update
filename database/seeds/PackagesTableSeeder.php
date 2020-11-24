<?php

use Illuminate\Database\Seeder;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('packages')->insert([
            'name' => 'Beginner',
            'min_amount' => 50,
            'roi' => 15,
            'duration_in_days' => 15,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
        DB::table('packages')->insert([
            'name' => 'Advance',
            'min_amount' => 100,
            'roi' => 40,
            'duration_in_days' => 30,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        
    }
}
