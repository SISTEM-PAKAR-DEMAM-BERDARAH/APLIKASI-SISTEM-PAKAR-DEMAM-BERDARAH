<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kode_user' => 'USR-001',
                'nama_user'    => 'Admin',
                'password'    => 'Admin',
                'alamat'    => 'Indonesia',
                'level'    => 'Admin',
            ],
            [
                'kode_user' => 'USR-002',
                'nama_user'    => 'User',
                'password'    => 'User',
                'alamat'    => 'Indonesia',
                'level'    => 'User',
            ]
        ];

        $this->db->table('users')->insertBatch($data);
    }
}
