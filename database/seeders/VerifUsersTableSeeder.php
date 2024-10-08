<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class VerifUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 30; $i++) {
            $userId = Str::uuid();
            DB::table('users')->insert([
                'id' => $userId,
                'username' => 'verif' . $i,
                'firstname' => 'verif',
                'lastname' => $i,
                'email' => 'verif' . $i . '@pemilihberkah.com',
                'email_verified_at' => now(),
                'password' => Hash::make('verif_pemilihberkah'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $this->command->info('10 akun Verif telah berhasil dibuat.');
    }
}
