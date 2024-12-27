<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateGroupChatTable extends Migration
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
            'IDUserName' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'Chat' => [
                'type'       => 'TEXT',
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
        $this->forge->createTable('groupchat');
    }

    public function down()
    {
        $this->forge->dropTable('groupchat');
    }
}
