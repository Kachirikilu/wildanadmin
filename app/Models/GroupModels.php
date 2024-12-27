<?php

namespace App\Models;

use CodeIgniter\Model;

class GroupModels extends Model {
    protected $table      = 'groupchat';
    protected $allowedFields = ['ID', 'IDUserName', 'Chat', 'Time', 'Date'];

    public function getChatUserName($id = false) {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['ID' => $id])->first();
    }
}