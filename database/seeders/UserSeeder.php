<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'nama_depan'    => 'Khairon',
            'nama_belakang' => '',
            'nik'           => 3209290609840123,
            'tempat_lahir'  => 'Cirebon',
            'tanggal_lahir' => '1984-09-06',
            'email'         => 'khaironbizzz@gmail.com',
            'nomor_telepon' => '081213798776',
            'password'      => bcrypt('123456'),
            'role'          => '01hgypq1q4tsxp49b5dtn2645f'
        ];
        $user = new User();
        $create = $user->create($data);
    }
}
