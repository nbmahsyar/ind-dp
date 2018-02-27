<?php

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
        DB::table('Users')->insert([
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'nama_pegawai' => 'Admin',
            'email' => 'eh@email.com',
            'role' => 'Admin',
        ]);
    }
}
