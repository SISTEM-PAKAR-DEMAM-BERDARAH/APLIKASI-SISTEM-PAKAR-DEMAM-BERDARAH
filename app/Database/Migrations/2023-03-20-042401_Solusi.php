<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Solusi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kode_solusi' => [
                'type'           => 'VARCHAR',
                'constraint'     => 3,
                'unsigned'       => false,
                'auto_increment' => false,
            ],
            'detail_solusi' => [
                'type' => 'TEXT',
                'null' => false,
            ],
            'kode_penyakit' => [
                'type'       => 'VARCHAR',
                'constraint' => 3,
            ],
        ]);
        $this->forge->addKey('kode_solusi', true);
        $this->forge->addForeignKey('kode_penyakit', 'penyakit', 'kode_penyakit', 'CASCADE', 'CASCADE');
        $this->forge->createTable('solusi');
    }

    public function down()
    {
        $this->forge->dropTable('solusi');
    }
}
