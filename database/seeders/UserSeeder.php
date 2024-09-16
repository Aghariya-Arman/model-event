<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = collect([
            [
                'name' => 'arman',
                'email' => 'aghariya@gmail.com'
            ],
            [
                'name' => 'rehmam',
                'email' => 'rehman@gmail.com'
            ],
            [
                'name' => 'mohmad',
                'email' => 'mohmad@gmail.com'
            ],
            [
                'name' => 'ahemd',
                'email' => 'ahmed@gmail.com'
            ],
        ]);

        $users->each(function ($user) {
            User::insert($user);
        });
    }
}
