<?php

namespace App\Controllers;

class Beta extends BaseController {
    protected $createAdmin;
    protected $kolomKomentar;
    protected $userRegistrasi;
    protected $createCustom;

    public function __construct() {
        $this->createAdmin = new \App\Models\CreateModels();
        $this->kolomKomentar = new \App\Models\KomentarModels();
        $this->userRegistrasi = new \App\Models\RegistrasiModels();
        $this->createCustom = new \App\Models\CustomModels();
    }


    // Induk

    public function index() {

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $Search = $this->createAdmin->search($keyword);
        } else {
            $Search = $this->createAdmin;
        }
        $data = [
            'createAdmin' => $Search->orderBy('id', 'DESC')->paginate(14, 'home'),
            'pager' => $this->createAdmin->pager,
            'userX' => $this->userRegistrasi->getUserName()
        ];
        return view('user', $data);
        }

        public function detail($slug) {
            $db = $this->createAdmin->where('Slug', $slug)->first();
            if ($db == null) {
                return redirect()->to('/beta');
            }

            $data = [
                'createAdmin' => $this->createAdmin->getCreateAdminSlug($slug),
                'createAdminX' => $this->createAdmin->getCreateAdmin(),
                'userX' => $this->userRegistrasi->getUserName(),
                'kolomKomentar' => $this->kolomKomentar,
                'user' => $this->userRegistrasi
            ];
        echo view('userDetail', $data);
        echo view('detailInti', $data);
        echo view('userKomentar', $data);
    }
    public function detailviewer($id) {
        $view = $this->createAdmin->where('ID', $id)->first();
        $this->createAdmin->save([
            'id' => $view['ID'],
            'View' => $view['View'] + 1
        ]);
        return redirect()->to('beta_article/' . $view['Slug']);
    }

    public function custom() {
            return view('custom');
    }

    public function customview() {

        $data = [
            'custom' => $this->createCustom->getCustom(),
        ];

            return view('customView', $data);
    }

    public function customdetail($id) {
        $db = $this->createCustom->where('ID', $id)->first();
        if ($db == null) {
            return redirect()->to('/');
        }
            $data = [
                'custom' => $db,
            ];

            return view('customDetail', $data);
    }

    public function customdelete($id) {

        if (session()->get('Pangkat') == "CEO") {
        $db = $this->createCustom->where('ID', $id)->first();
        if ($db == null) {
            return redirect()->to('/');
        }
            $data = [
                'custom' => $db,
            ];

            echo view('customDelete', $data);
            echo view('customDetail', $data);
        } else {
            return redirect()->to('custom_view');
        }
    }
}