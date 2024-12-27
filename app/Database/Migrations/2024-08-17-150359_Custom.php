<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCustomTable extends Migration
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
            'By' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'leftNavbar' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'rightNavbar' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'icon' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'iconPlaceholder' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'backgroundColumn' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'colorColumn' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'backgroundPage' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'colorPage' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'hoverPage' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'columnBorder' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
        ]);

        $this->forge->addKey('ID', true);
        $this->forge->createTable('custom');
    }

    public function down()
    {
        $this->forge->dropTable('custom');
    }
}
