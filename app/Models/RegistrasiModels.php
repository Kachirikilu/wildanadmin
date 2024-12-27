<?php

namespace App\Models;

use CodeIgniter\Model;

class RegistrasiModels extends Model {
    protected $table      = 'registrasi';
    protected $allowedFields = ['ID','Name', 'Email', 'UserName', 'Password', 'WhatsApp', 'Instagram', 'Facebook', 'Profil', 'Pangkat', 'Color', 'Image', 'View'];

    public function getUserName($username = false) {
        if ($username == false) {
            return $this->findAll();
        }
        return $this->where(['UserName' => $username])->first();
    }

    public function getPangkat($pangkat = false) {
        if ($pangkat == false) {
            return $this->findAll();
        }
        return $this->where(['Pangkat' => $pangkat])->first();
    }

    public function getUserID($id = false) {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['ID' => $id])->first();
    }
}
