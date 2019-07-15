<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'Faustino Vasquez',
            'email' => 'fvasquez@local.com',
        ]);

        factory(User::class)->create([
            'name' => 'Sebastian Vasquez',
            'email' => 'svasquez@local.com',
        ]);

        factory(User::class,5)->create();


    }
}
