<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                 [
                     'name'              => 'admin',
                     'email'             => 'gaye.tidiane@equinc.sn',
                     'email_verified_at' => now(),
                     'password'          => '$2y$10$iA5FZb2xb/HAPeq/WQmcxu6T4qYL8iwlbVCB1EXLQRFDSsAauo4rK', // password
                     'roles'             => 'admin',
                     'remember_token'    => Str::random(10),
                 ],
                 [
                    'name'              => 'user',
                    'email'             => 'senghor.cheikh@equinc.sn',
                    'email_verified_at' => now(),
                    'password'          => '$2y$10$iA5FZb2xb/HAPeq/WQmcxu6T4qYL8iwlbVCB1EXLQRFDSsAauo4rK', // password
                    'roles'             => 'user',
                    'remember_token'    => Str::random(10),
                ]
            ]
        );
    }
}
