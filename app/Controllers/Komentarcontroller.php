<?php

namespace App\Controllers;

class KomentarController extends BaseController {

    protected $kolomKomentar;
    protected $createAdmin;
    public function __construct() {
        $this->kolomKomentar = new \App\Models\KomentarModels();
        $this->createAdmin = new \App\Models\CreateModels();
    }

    public function save() {

        $idArtikel = $this->request->getVar('inputID');

        $slugArtikel = $this->createAdmin->where('ID', $idArtikel)->first();
        $Artikel = $slugArtikel['Slug'];

        
        if (!$this->validate([
            'inputGambar' => [
                'rules' => 'max_size[inputGambar,51200]|is_image[inputGambar]|mime_in[inputGambar,image/jpg,image/jpeg,image/png,image/dng,image/gif,image/heif,image/heic,image/tif,image/tiff,image/svg]',
                'errors' => [
                    'max_size' => 'Maximum photo file size is 50 MB!',
                    'is_image' => 'File format not supported!',
                    'mime_in' => 'File format not supported!'
                ]
            ],
        ])) {
            return redirect()->to('article/' . $Artikel)->withInput();
        }

        $picture = $this->request->getFile('inputGambar');
        if ($picture->getError() == 4) {
            $picturename = '';
        } else {
            $outputPicture = $this->request->getFile('inputGambar');
            $picturename = $picture->getRandomName();
            $outputPicture->move('CommentPicture/', $picturename);
        }

        $this->kolomKomentar->save([
            'IDArtikel' => $idArtikel,
            'IDUserName' => session()->get('ID'),
            'Komentar' => $this->request->getVar('inputKomentar'),
            'Picture' => $picturename,
            'Time' => $this->request->getVar('inputTime'),
            'Date' => $this->request->getVar('inputDate')
        ]);

        return redirect()->to('article/'. $Artikel);

    }

    public function update($id) {

        $idArtikel = $this->request->getVar('inputID');

        $slugArtikel = $this->createAdmin->where('ID', $idArtikel)->first();
        $Artikel = $slugArtikel['Slug'];

        if (!$this->validate([
            'inputGambar' => [
                'rules' => 'max_size[inputGambar,51200]|is_image[inputGambar]|mime_in[inputGambar,image/jpg,image/jpeg,image/png,image/dng,image/gif,image/heif,image/heic,image/tif,image/tiff,image/svg]',
                'errors' => [
                    'max_size' => 'Maximum photo file size is 50 MB!',
                    'is_image' => 'File format not supported!',
                    'mime_in' => 'File format not supported!'
                ]
            ],
        ])) {
            return redirect()->to('edit_comment/' . $id)->withInput();
        }

        $pictureKomen = $this->kolomKomentar->where('ID', $id)->first();

        $picture = $this->request->getFile('inputGambar');
        $pictureX = $this->request->getVar('inputGambarX');
        
        if ($picture->getError() == 4) {
            if ($pictureX !== "") {
                $picturename = $pictureKomen['Picture'];
            } else {
                $picturename = "";
                if ($pictureKomen['Picture'] !== "") {
                    unlink('CommentPicture/' .  $pictureKomen['Picture']);
                }
            }
        } else {
            $outputPicture = $this->request->getFile('inputGambar');
            $picturename = $picture->getRandomName();
            $outputPicture->move('CommentPicture/', $picturename);

            if ($pictureX !== "") {
                unlink('CommentPicture/' .  $pictureKomen['Picture']);
            }
        }

        $this->kolomKomentar->save([
            'id' => $id,
            'IDArtikel' => $idArtikel,
            'IDUserName' => session()->get('ID'),
            'Komentar' => $this->request->getVar('inputKomentar'),
            'Picture' => $picturename
        ]);

        return redirect()->to('article/'. $Artikel);
        
    }

    public function deletecomment($id) {
        $detail = $this->request->getVar('IDArtikel');

        $picture = $this->request->getVar('inputGambar');
        if ($picture !== "") {
            unlink('CommentPicture/' . $picture);
        }

        $slugArtikel = $this->createAdmin->where('ID', $detail)->first();
        $Artikel = $slugArtikel['Slug'];

        $this->kolomKomentar->delete($id);
        return redirect()->to('article/'. $Artikel);
    }
}