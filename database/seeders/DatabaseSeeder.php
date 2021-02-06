<?php

namespace Database\Seeders;

use App\Models\Roles;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'Firstname' => 'Admin',
            'Lastname' => 'Admin',
            'PhoneNumber' => '09122040145',
            'email' => 'Admin@gmail.com',
            'password' => Hash::make(13482331),
            'Permission' => 'Admin',
        ]);
        $Roles = ['نجار' , 'نقاش' , 'رویه کوب' , 'چوب بر'];
        foreach ($Roles as $role) {
            Roles::create([
                'Name' => $role
            ]);
        }
        // \App\Models\User::factory(10)->create();
    }
}
