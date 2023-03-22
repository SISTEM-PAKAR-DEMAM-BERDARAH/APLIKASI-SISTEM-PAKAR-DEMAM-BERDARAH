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
            'email' => 'admin@gmail.com',
            'username' => 'Administrator',
            //loginadmin
            'password_hash' => '$2y$10$XT1Ty1rWnuMuHcrQ7BDm8.HnpOEywUQilLEb3BiTNGbqK1z.UIBKC',
            'active' => 1
        ];

        $userModel = model(UserModel::class);
        $user = new User($data);
        $userModel->withGroup('admin');
        $userModel->insert($user);
    }
}
