<?php

namespace App\Models;

use CodeIgniter\Model;

class KomentarModels extends Model {
    protected $table      = 'komentar';
    protected $allowedFields = ['ID', 'IDArtikel', 'IDUserName', 'Komentar', 'Picture', 'Time', 'Date'];

    public function getUserName($id = false) {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['IDArtikel' => $id])->first();
    }

    public function getKomentar($id = false) {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['ID' => $id])->first();
    }
}