<?php
namespace App\Models;

use CodeIgniter\Model;

class APIModels extends Model
{
    protected $table = 'home';

    public function getData()
    {
        $builder = $this->db->table($this->table);
        $builder->select('*');
        $query = $builder->get();
        return $query->getResultArray();
    }
}