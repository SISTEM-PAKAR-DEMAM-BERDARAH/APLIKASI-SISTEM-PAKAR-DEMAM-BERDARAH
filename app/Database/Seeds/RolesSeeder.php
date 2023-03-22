<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RolesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'admin',
                'description' => 'Administrator Role'
            ],
            [
                'name' => 'user',
                'description' => 'Users Role'
            ]
        ];

        $this->db->table('auth_groups')->insertBatch($data);
    }
}
