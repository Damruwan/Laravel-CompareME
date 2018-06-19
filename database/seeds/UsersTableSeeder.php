<?php

use Illuminate\Database\Seeder;

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
        User::create([
            'name' => 'administrator',
            'email' => 'admin@compareme.lk',
            'password' => 'abc123',
            'role_id' => User::ROLE_ADMIN
        ]);

        User::create([
            'name' => 'user',
            'email' => 'user@compareme.lk',
            'password' => 'abc123',
            'role_id' => User::ROLE_USER
        ]);
    }
}
