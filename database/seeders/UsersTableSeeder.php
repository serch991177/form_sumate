<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Admin Admin',
            'email' => 'admin@cochabamba.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'administrador' => 1,
            'generador' => 1,
            'estado'=>'ACTIVO',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
