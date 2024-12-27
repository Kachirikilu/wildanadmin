<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTugasTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'ID' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'IDArtikel' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'Nama' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'NIM' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'Kelas' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'File' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'Time' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'Date' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);

        $this->forge->addKey('ID', true);
        $this->forge->createTable('tugas');
    }

    public function down()
    {
        $this->forge->dropTable('tugas');
    }
}
