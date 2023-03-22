<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('RolesSeeder');
        $this->call('UserSeeder');
        $this->call('GejalaSeeder');
        $this->call('PenyakitSeeder');
        $this->call('SolusiSeeder');
        $this->call('PengetahuanSeeder');
    }
}
