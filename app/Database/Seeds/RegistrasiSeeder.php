<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RegistrasiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'ID' => 1,
            'Name' => 'Wildan Athif Muttaqien',
            'Email' => 'muttaqien.wildan12@gmail.com',
            'UserName' => 'wildan12',
            'Password' => '$2y$10$rOtdcYqn6KARyq1E9tSty.lEL.eV1i8D9O57afAuO4y/jvw8zzeMi',
            'WhatsApp' => '-',
            'Instagram' => '-',
            'Facebook' => '-',
            'Profil' => '1757408535_ef31e0bae32ec2f3d716.jpg',
            'Pangkat' => 'CEO',
            'Color' => 'nightEdition',
            'Image' => 'W2',
            'View' => 0,
        ];

        $this->db->table('registrasi')->insert($data);
    }
}