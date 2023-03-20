<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Gejala extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kode_gejala' => [
                'type'           => 'VARCHAR',
                'constraint'     => 3,
                'unsigned'       => false,
                'auto_increment' => false,
            ],
            'nama_gejala' => [
                'type'       => 'VARCHAR',
                'constraint' => '150',
            ],
        ]);
        $this->forge->addKey('kode_gejala', true);
        $this->forge->createTable('gejala');
    }

    public function down()
    {
        $this->forge->dropTable('gejala');
    }
}
