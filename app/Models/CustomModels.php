<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomModels extends Model {
    protected $table      = 'custom';
    protected $allowedFields = ['By', 'leftNavbar', 'rightNavbar', 'icon', 'iconPlaceholder', 'backgroundColumn', 'colorColumn', 'backgroundPage', 'colorPage', 'hoverPage', 'columnBorder'];

    public function getCustom($id = false) {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['ID' => $id])->first();
    }
}