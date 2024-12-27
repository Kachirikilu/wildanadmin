<?php

namespace App\Models;

use CodeIgniter\Model;

class CreateModels extends Model {
    protected $table      = 'home';
    protected $allowedFields = ['Slug', 'Judul', 'Picture', 'Penulis', 'Tanggal',
    'Paragraf1', 'Paragraf2', 'Paragraf3', 'Paragraf4', 'Paragraf5', 'Paragraf6', 'Paragraf7', 'Paragraf8', 'Paragraf9', 'Paragraf10', 'Paragraf11', 'Paragraf12',
    'PictureP2', 'PictureP3', 'PictureP4', 'PictureP5', 'PictureP6', 'PictureP7', 'PictureP8', 'PictureP9', 'PictureP10', 'PictureP11', 'PictureP12', 'Kategori', 'PictureP1',
    'View', 'DateSlug',
    'Coding1', 'Coding2', 'Coding3', 'Coding4', 'Coding5', 'Coding6', 'Coding7', 'Coding8', 'Coding9', 'Coding10', 'Coding11', 'Coding12',
    'infoCoding1', 'infoCoding2', 'infoCoding3', 'infoCoding4', 'infoCoding5', 'infoCoding6', 'infoCoding7', 'infoCoding8', 'infoCoding9', 'infoCoding10', 'infoCoding11', 'infoCoding12',
    'Coding1CSS', 'Coding1JS', 
    'Coding2CSS', 'Coding2JS',
    'Coding3CSS', 'Coding3JS', 
    'Coding4CSS', 'Coding4JS', 
    'Coding5CSS', 'Coding5JS', 
    'Coding6CSS', 'Coding6JS', 
    'Coding7CSS', 'Coding7JS', 
    'Coding8CSS', 'Coding8JS', 
    'Coding9CSS', 'Coding9JS', 
    'Coding10CSS', 'Coding10JS', 
    'Coding11CSS', 'Coding11JS', 
    'Coding12CSS', 'Coding12JS'
];

    public function getCreateAdmin($id = false) {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['ID' => $id])->first();
    }

    public function getCreateAdminSlug($slug = false) {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['Slug' => $slug])->first();
    }

    // public function getTopViews($limit)
    // {
    //     return $this->orderBy('View', 'desc')
    //         ->limit($limit)
    //         ->findAll();
    // }

    public function search($keyword)
    {
        $keywords = [
            "ALL", "All", "all",
            "ALL VIEW", "All View", "All view", "all view",
            "BACK HOME", "Back Home", "Back home", "back home"
        ];
    
        if (in_array($keyword, $keywords)) {
            return $this->table('home');
        } else {
            return $this->table('home')
                ->groupStart()
                ->orLike('Judul', $keyword)
                ->orLike('Paragraf1', $keyword)
                ->orLike('Paragraf2', $keyword)
                ->orLike('Paragraf3', $keyword)
                ->orLike('Paragraf4', $keyword)
                ->orLike('Paragraf5', $keyword)
                ->orLike('Paragraf6', $keyword)
                ->orLike('Paragraf7', $keyword)
                ->orLike('Paragraf8', $keyword)
                ->orLike('Paragraf9', $keyword)
                ->orLike('Paragraf10', $keyword)
                ->orLike('Paragraf11', $keyword)
                ->orLike('Paragraf12', $keyword)
                ->orLike('Penulis', $keyword)
                ->orLike('Tanggal', $keyword)
                ->orLike('Kategori', $keyword)
                ->groupEnd();
        }
    }    
}