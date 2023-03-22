<?php

namespace App\Database\Seeds;

use Myth\Auth\Entities\User;
use Myth\Auth\Models\UserModel;
use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{

    public function run()
    {
        $data = [
            'email' => 'admin@admin.com',
            'username' => 'Administrator',
            'password_hash' => password_hash('admin', PASSWORD_DEFAULT),
            'active' => 1
        ];

        $userModel = model(UserModel::class);
        $user = new User($data);
        $userModel->withGroup('admin');
        $userModel->insert($user);
    }
}
