<?php

namespace App\Models;

use CodeIgniter\Model;

class ChatModels extends Model {
    protected $table      = 'chat';
    protected $allowedFields = ['ID', 'IDPengirim', 'IDDikirim', 'Chat', 'Time', 'Date'];

    public function getChatUserName($id = false) {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['ID' => $id])->first();
    }
}