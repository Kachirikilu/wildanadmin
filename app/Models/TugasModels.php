<?php

namespace App\Models;

use CodeIgniter\Model;

class TugasModels extends Model {
    protected $table      = 'tugas';
    protected $allowedFields = ['ID', 'IDArtikel', 'Nama', 'NIM', 'Kelas', 'File', 'Time', 'Date'];

    public function getTugas($id = false) {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['ID' => $id])->first();
    }
}