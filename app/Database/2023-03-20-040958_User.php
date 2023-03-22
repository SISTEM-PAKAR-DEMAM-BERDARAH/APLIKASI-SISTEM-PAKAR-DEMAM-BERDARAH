<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kode_user' => [
                'type'           => 'VARCHAR',
                'constraint'     => 7,
                'unsigned'       => false,
                'auto_increment' => false,
            ],
            'nama_user' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'alamat' => [
                'type' => 'TEXT',
                'null' => false,
            ],
            'level' => [
                'type'       => 'VARCHAR',
                'constraint' => '5',
            ],
        ]);
        $this->forge->addKey('kode_user', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
