<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Person;
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
        $user = User::create([
            'name' => 'Herald',
            'email' => 'heraldcnp@gmail.com',
            'password' => bcrypt('123'),
        ])->assignRole('Admin');

        $user->people()->create([
            'name' => 'Herald',
            'app' => 'Choque',
            'apm' => 'Vargas',
            'ci' => '6680287',
            'phone' => '72367995',
        ]);
        // $user = User::create([
        //     'name' => $request['name'],
        //     'email' => $request['email'],
        //     'password' => Hash::make($request['name']),
        // ]);

        // User::factory(4)->create();
    }
}
