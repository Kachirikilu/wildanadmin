<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKomentarTable extends Migration
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
            'IDUserName' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'Komentar' => [
                'type'       => 'TEXT',
            ],
            'Picture' => [
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
        $this->forge->createTable('komentar');
    }

    public function down()
    {
        $this->forge->dropTable('komentar');
    }
}
