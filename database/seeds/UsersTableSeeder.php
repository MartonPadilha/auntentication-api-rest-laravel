<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => '4',
            'name' => 'teste',
            'email' => 'teste@email.com',
            'email_verified_at' => null,
            'password' => Hash::make('teste123'),
            'remember_token' => null,
            'created_at' => null,
            'updated_at' => null
            ]);
    }
}
