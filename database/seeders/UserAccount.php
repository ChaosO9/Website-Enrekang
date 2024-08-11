<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserAccount extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);

        $user = new User([
            'name' => 'Sukmawati',
            'username' => 'ahmad123',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        $user->save();
        $user->assignRole('admin');

        $user = new User([
            'name' => 'Akram',
            'username' => 'akram123',
            'email' => 'akram@example.com',
            'password' => bcrypt('12345678'),
        ]);
        $user->save();
        $user->assignRole('user');
    }
}
