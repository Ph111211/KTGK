<?php 
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Tạo 10 user giả
        foreach (range(1, 40) as $index) {
            DB::table('users')->insert([
                'name' => $faker->unique()->userName, // Tên tài khoản
                'email' => $faker->unique()->safeEmail, // Email
                'password' => Hash::make('password'), // Mật khẩu mặc định
                'role' => $faker->randomElement(['admin', 'user', 'moderator']), // Role ngẫu nhiên
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
