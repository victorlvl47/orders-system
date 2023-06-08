<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Create the test admin user
        $test_admin_user = User::factory()->create([
            'name' => 'Admin Test', 
            'email' => 'admintest@mail.com', 
            'password' => '123456'
        ]);

        // Create some orders
        Order::factory(10)->create();
    }
}
