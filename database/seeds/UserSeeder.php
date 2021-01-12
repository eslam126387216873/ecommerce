<?php

use Illuminate\Database\Seeder;

use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 1,
            'name' => 'eslam',
            'email' => 'eslam@gmail.com',
            'password' => bcrypt('123'),
            'phone' => '0113283547',
            'role' => 'admin',
            'block' => 0
        ]);
    }
}
