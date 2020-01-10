<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'email' => 'admin@example.com',
	        'password' => Hash::make('12345'),
	        'is_admin' => 1
        ]);
    }
}
