<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nama' => 'Superadmin','nomor_induk' => '001','email' => 'superadmin@email.com','password' => Hash::make('rahasia'),'role_id' => '1'],
            ['nama' => 'Admin','nomor_induk' => '002','email' => 'admin@email.com','password' => Hash::make('rahasia'),'role_id' => '2'],
            ['nama' => 'Peminjam','nomor_induk' => '003','email' => 'peminjam@email.com','password' => Hash::make('rahasia'),'role_id' => '3'],
        ];

        foreach ($data as $value) {
            User::insert([
                'nama' => $value['nama'],
                'nomor_induk' => $value['nomor_induk'],
                'email' => $value['email'],
                'password' => $value['password'],
                'role_id' => $value['role_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'email_verified_at' => Carbon::now()
            ]);
        }
    }
}
