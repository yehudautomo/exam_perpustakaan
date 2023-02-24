<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

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
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123123123'),
            'email_verified_at' => now()
        ])->assignRole('admin');

        User::create([
            'name' => 'petugas',
            'email' => 'petugas@gmail.com',
            'password' => bcrypt('123123123'),
            'email_verified_at' => now()
        ])->assignRole('petugas');

        User::create([
            'name' => 'peminjam',
            'email' => 'peminjam@gmail.com',
            'password' => bcrypt('123123123'),
            'email_verified_at' => now()
        ])->assignRole('peminjam');

        User::create([
            'name' => 'yehuda',
            'email' => 'yehuda.utomo@binus.ac.id',
            'password' => bcrypt('123123123'),
            'email_verified_at' => now()
        ])->assignRole('peminjam');

        User::create([
            'name' => 'yahya',
            'email' => 'yahya@gmail.com',
            'password' => bcrypt('123123123'),
            'email_verified_at' => now()
        ])->assignRole('peminjam');
    }
}
