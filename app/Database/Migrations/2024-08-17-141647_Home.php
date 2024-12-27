<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateHomeTable extends Migration
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
            'Slug' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'Judul' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'Picture' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'Penulis' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'Tanggal' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],



            'Paragraf1' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Paragraf2' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Paragraf3' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Paragraf4' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Paragraf5' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Paragraf6' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Paragraf7' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Paragraf8' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Paragraf9' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Paragraf10' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Paragraf11' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Paragraf12' => [
                'type' => 'TEXT',
                'null' => true,
            ],



            'PictureP1' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'PictureP2' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'PictureP3' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'PictureP4' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'PictureP5' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'PictureP6' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'PictureP7' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'PictureP8' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'PictureP9' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'PictureP10' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'PictureP11' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'PictureP12' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],



            'Kategori' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
            ],
            'View' => [
                'type' => 'INT',
                'constraint' => 11,
                'default' => 0,
            ],
            'DateSlug' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],



            'Coding1' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Coding2' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Coding3' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Coding4' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Coding5' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Coding6' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Coding7' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Coding8' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Coding9' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Coding10' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Coding11' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Coding12' => [
                'type' => 'TEXT',
                'null' => true,
            ],



            
            'Coding1CSS' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Coding1JS' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Coding2CSS' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Coding2JS' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Coding3CSS' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Coding3JS' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Coding4CSS' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Coding4JS' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Coding5CSS' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Coding5JS' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Coding6CSS' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Coding6JS' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Coding7CSS' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Coding7JS' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Coding8CSS' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Coding8JS' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Coding9CSS' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Coding9JS' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Coding10CSS' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Coding10JS' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Coding11CSS' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Coding11JS' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Coding12CSS' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'Coding12JS' => [
                'type' => 'TEXT',
                'null' => true,
            ],




            'infoCoding1' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'infoCoding2' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'infoCoding3' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'infoCoding4' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'infoCoding5' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'infoCoding6' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'infoCoding7' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'infoCoding8' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'infoCoding9' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'infoCoding10' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'infoCoding11' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'infoCoding12' => [
                'type' => 'TEXT',
                'null' => true,
            ],



            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('ID', true);
        $this->forge->createTable('home');
    }

    public function down()
    {
        $this->forge->dropTable('home');
    }
}