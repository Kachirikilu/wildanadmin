<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRegistrasiTable extends Migration
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
            'Name' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'Email' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'UserName' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'Password' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'WhatsApp' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
                'null'       => true,
            ],
            'Instagram' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'Facebook' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'Profil' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
            'Pangkat' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'Color' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'Image' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'View' => [
                'type'       => 'INT',
                'constraint' => 11,
                'default'    => 0,
            ],
        ]);

        $this->forge->addKey('ID', true);
        $this->forge->createTable('registrasi');
    }

    public function down()
    {
        $this->forge->dropTable('registrasi');
    }
}