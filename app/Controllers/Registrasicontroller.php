<?php

namespace App\Controllers;

class RegistrasiController extends BaseController
{
    protected $userRegistrasi;
    public function __construct() {
        $this->userRegistrasi = new \App\Models\RegistrasiModels();
    }

    public function save() {

        if (!$this->validate([
            'inputUserName' => [
                'rules' => 'required|is_unique[registrasi.UserName]',
                'errors' => [
                    'required' => 'Username is required!',
                    'is_unique' => 'Username already exists!'
                ]
            ],
            'inputEmail' => [
                'rules' => 'required|is_unique[registrasi.Email]',
                'errors' => [
                    'required' => 'Email is required!',
                    'is_unique' => 'Email already exists!'
                ]
            ],
            'inputProfil' => [
                'rules' => 'max_size[inputProfil,51200]|is_image[inputProfil]|mime_in[inputProfil,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Maximum photo file size is 50 MB!',
                    'is_image' => 'File format not supported!',
                    'mime_in' => 'File format not supported!'
                ]
            ],
            'inputPasswordX' => [
                'rules' => 'matches[inputPassword]',
                'errors' => [
                    'matches' => '(Incorrect password confirmation!)',
                ]
            ]
        ])) {
            return redirect()->to('/registrasi')->withInput();
        }

        $profil = $this->request->getFile('inputProfil');
        if ($profil->getError() == 4) {
            $profilname = 'Unknown.jpg';
        } else {
            $outputProfil = $this->request->getFile('inputProfil');
            $profilname = $outputProfil->getRandomName();
            $outputProfil->move('ProfilUser/', $profilname);
        }

        // Pembatas

        $WhatsApp = $this->request->getVar('inputWhatsApp');
        if ($WhatsApp !== "") {
            $wa = $this->request->getVar('inputWhatsApp');
        } else {
            $wa = '-';
        }

        $Instagram = $this->request->getVar('inputInstagram');
        if ($Instagram !== "") {
            $ig = $this->request->getVar('inputInstagram');
        } else {
            $ig = '-';
        }

        $Facebook = $this->request->getVar('inputFacebook');
        if ($Facebook !== "") {
            $fb = $this->request->getVar('inputFacebook');
        } else {
            $fb = '-';
        }

        // Pembatas

        $voucher = $this->request->getVar('inputAdminID');
        if ($voucher == env('VOUCHER_ADMIN')) {
            $pangkat = 'Admin';
        } else if ($voucher == env('VOUCHER_OWNER')) {
            $pangkat = 'CEO';
        } else {
            $pangkat = 'User';
        }

        $username = url_title($this->request->getVar('inputUserName'), '_', true);

        $this->userRegistrasi->save([
            'Name' => $this->request->getVar('inputName'),
            'Email' => $this->request->getVar('inputEmail'),
            'UserName' => $username,
            'Password' => password_hash($this->request->getVar('inputPassword'), PASSWORD_DEFAULT),
            'WhatsApp' => $wa,
            'Instagram' => $ig,
            'Facebook' => $fb,
            'Profil' => $profilname,
            'Pangkat' => $pangkat,
            'Color' => $this->request->getVar('inputColor'),
            'Wallpaper' => $this->request->getVar('inputWallpaper')
        ]);

        return redirect()->to('/login');
    }

    public function savechat() {

        if (!$this->validate([
            'inputUserName' => [
                'rules' => 'required|is_unique[registrasi.UserName]',
                'errors' => [
                    'required' => 'Username is required!',
                    'is_unique' => 'Username already exists!'
                ]
            ],
            'inputEmail' => [
                'rules' => 'required|is_unique[registrasi.Email]',
                'errors' => [
                    'required' => 'Email is required!',
                    'is_unique' => 'Email already exists!'
                ]
            ],
            'inputProfil' => [
                'rules' => 'max_size[inputProfil,51200]|is_image[inputProfil]|mime_in[inputProfil,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Maximum photo file size is 50 MB!',
                    'is_image' => 'File format not supported!',
                    'mime_in' => 'File format not supported!'
                ]
            ],
            'inputPasswordX' => [
                'rules' => 'matches[inputPassword]',
                'errors' => [
                    'matches' => '(Incorrect password confirmation!)',
                ]
            ]
        ])) {
            return redirect()->to('/registrasi')->withInput();
        }

        $profil = $this->request->getFile('inputProfil');
        if ($profil->getError() == 4) {
            $profilname = 'Unknown.jpg';
        } else {
            $outputProfil = $this->request->getFile('inputProfil');
            $profilname = $outputProfil->getRandomName();
            $outputProfil->move('ProfilUser/', $profilname);
        }

        // Pembatas

        $WhatsApp = $this->request->getVar('inputWhatsApp');
        if ($WhatsApp !== "") {
            $wa = $this->request->getVar('inputWhatsApp');
        } else {
            $wa = '-';
        }

        $Instagram = $this->request->getVar('inputInstagram');
        if ($Instagram !== "") {
            $ig = $this->request->getVar('inputInstagram');
        } else {
            $ig = '-';
        }

        $Facebook = $this->request->getVar('inputFacebook');
        if ($Facebook !== "") {
            $fb = $this->request->getVar('inputFacebook');
        } else {
            $fb = '-';
        }

        // Pembatas

        $voucher = $this->request->getVar('inputAdminID');
        if ($voucher == env('VOUCHER_ADMIN')) {
            $pangkat = 'Admin';
        } else if ($voucher == env('VOUCHER_OWNER')) {
            $pangkat = 'CEO';
        } else {
            $pangkat = 'User';
        }

        $username = url_title($this->request->getVar('inputUserName'), '_', true);

        $this->userRegistrasi->save([
            'Name' => $this->request->getVar('inputName'),
            'Email' => $this->request->getVar('inputEmail'),
            'UserName' => $username,
            'Password' => password_hash($this->request->getVar('inputPassword'), PASSWORD_DEFAULT),
            'WhatsApp' => $wa,
            'Instagram' => $ig,
            'Facebook' => $fb,
            'Profil' => $profilname,
            'Pangkat' => $pangkat,
            'Color' => $this->request->getVar('inputColor'),
            'Wallpaper' => $this->request->getVar('inputWallpaper')
        ]);

        return redirect()->to('/login_chat');
    }

    public function login() {

        $username = url_title($this->request->getVar('inputUserName'), '_', true);
        $username2 = $this->request->getVar('inputUserName');

        $password = $this->request->getVar('inputPassword');

        $data = $this->userRegistrasi->where('UserName', $username)->first();
        $data2 = $this->userRegistrasi->where('Email', $username2)->first();

        $versi = $this->request->getVar('inputVersion');

        if ($data) {
            $pw = $data['Password'];
            $pwVerify = password_verify($password, $pw);
            if ($pwVerify) {
                $sessionData = [
                    'ID' => $data['ID'],
                    'Name' => $data['Name'],
                    'Email' => $data['Email'],
                    'UserName' => $data['UserName'],
                    'Password' => $data['Password'],
                    'WhatsApp' => $data['WhatsApp'],
                    'Instagram' => $data['Instagram'],
                    'Facebook' => $data['Facebook'],
                    'Profil' => $data['Profil'],
                    'Pangkat' => $data['Pangkat'],
                    'Color' => $data['Color'],
                    'Image' => $data['Image'],
                    'PasswordSession' => $this->request->getVar('inputPasswordSession'),
                    'DateSession' => $this->request->getVar('inputDateSession'),
                    'DateSessionL' => $this->request->getVar('inputDateSessionL'),
                    'View' => $data['View'],
                    'Versi' => $versi
                ];
                
                if ($versi == "lastUpdate") {
                    session()->set($sessionData);
                    return redirect()->to('');
                } else if ($versi == "Lite") {
                    session()->set($sessionData);
                    return redirect()->to('');
                } else if ($versi == "Chat") {
                    session()->set($sessionData);
                    return redirect()->to('/chat');
                } else if ($versi == "Mobile") {
                    session()->set($sessionData);
                    return redirect()->to('/mobile');
                } else if ($versi == "BETA") {
                    session()->set($sessionData);
                    return redirect()->to('/beta');
                } else if ($versi == "Custom") {
                    session()->set($sessionData);
                    return redirect()->to('/custom');
                }
            } else {
                session()->setFlashdata('PasswordSS', 'Password is wrong!');
                return redirect()->to('/login');
            }
        } else if ($data2) {
            $pw = $data2['Password'];
            $pwVerify = password_verify($password, $pw);
            if ($pwVerify) {
                $sessionData = [
                    'ID' => $data2['ID'],
                    'Name' => $data2['Name'],
                    'Email' => $data2['Email'],
                    'UserName' => $data2['UserName'],
                    'Password' => $data2['Password'],
                    'WhatsApp' => $data2['WhatsApp'],
                    'Instagram' => $data2['Instagram'],
                    'Facebook' => $data2['Facebook'],
                    'Profil' => $data2['Profil'],
                    'Pangkat' => $data2['Pangkat'],
                    'Color' => $data2['Color'],
                    'Image' => $data2['Image'],
                    'PasswordSession' => $this->request->getVar('inputPasswordSession'),
                    'DateSession' => $this->request->getVar('inputDateSession'),
                    'DateSessionL' => $this->request->getVar('inputDateSessionL'),
                    'View' =>  $data2['View'],
                    'Versi' => $versi
                ];

                if ($versi == "lastUpdate") {
                    session()->set($sessionData);
                    return redirect()->to('');
                } else if ($versi == "Lite") {
                    session()->set($sessionData);
                    return redirect()->to('');
                } else if ($versi == "Chat") {
                    session()->set($sessionData);
                    return redirect()->to('/chat');
                } else if ($versi == "Mobile") {
                    session()->set($sessionData);
                    return redirect()->to('/mobile');
                } else if ($versi == "BETA") {
                    session()->set($sessionData);
                    return redirect()->to('/beta');
                } else if ($versi == "Custom") {
                    session()->set($sessionData);
                    return redirect()->to('/custom');
                }
            } else {
                session()->setFlashdata('PasswordSS', 'Password is wrong!');
                return redirect()->to('/login');
            }
        } else {
            session()->setFlashdata('UserNameSS', 'Email or username is not found!');
            return redirect()->to('/login');
        }
    }

    public function loginchat() {

        $username = url_title($this->request->getVar('inputUserName'), '_', true);
        $username2 = $this->request->getVar('inputUserName');

        $password = $this->request->getVar('inputPassword');

        $data = $this->userRegistrasi->where('UserName', $username)->first();
        $data2 = $this->userRegistrasi->where('Email', $username2)->first();

        $versi = $this->request->getVar('inputVersion');

        if ($data) {
            $pw = $data['Password'];
            $pwVerify = password_verify($password, $pw);
            if ($pwVerify) {
                $sessionData = [
                    'ID' => $data['ID'],
                    'Name' => $data['Name'],
                    'Email' => $data['Email'],
                    'UserName' => $data['UserName'],
                    'Password' => $data['Password'],
                    'WhatsApp' => $data['WhatsApp'],
                    'Instagram' => $data['Instagram'],
                    'Facebook' => $data['Facebook'],
                    'Profil' => $data['Profil'],
                    'Pangkat' => $data['Pangkat'],
                    'Color' => $data['Color'],
                    'Image' => $data['Image'],
                    'PasswordSession' => $this->request->getVar('inputPasswordSession'),
                    'DateSession' => $this->request->getVar('inputDateSession'),
                    'DateSessionL' => $this->request->getVar('inputDateSessionL'),
                    'View' => $data['View'],
                    'Versi' => $versi
                ];

                if ($versi == "lastUpdate") {
                    session()->set($sessionData);
                    return redirect()->to('');
                } else if ($versi == "Lite") {
                    session()->set($sessionData);
                    return redirect()->to('');
                } else if ($versi == "Chat") {
                    session()->set($sessionData);
                    return redirect()->to('/chat');
                } else if ($versi == "Mobile") {
                    session()->set($sessionData);
                    return redirect()->to('/mobile');
                } else if ($versi == "BETA") {
                    session()->set($sessionData);
                    return redirect()->to('/beta');
                } else if ($versi == "Custom") {
                    session()->set($sessionData);
                    return redirect()->to('/custom');
                }
            } else {
                session()->setFlashdata('PasswordSS', 'Password is wrong!');
                return redirect()->to('/login_chat');
            }
        } else if ($data2) {
            $pw = $data2['Password'];
            $pwVerify = password_verify($password, $pw);
            if ($pwVerify) {
                $sessionData = [
                    'ID' => $data2['ID'],
                    'Name' => $data2['Name'],
                    'Email' => $data2['Email'],
                    'UserName' => $data2['UserName'],
                    'Password' => $data2['Password'],
                    'WhatsApp' => $data2['WhatsApp'],
                    'Instagram' => $data2['Instagram'],
                    'Facebook' => $data2['Facebook'],
                    'Profil' => $data2['Profil'],
                    'Pangkat' => $data2['Pangkat'],
                    'Color' => $data2['Color'],
                    'Image' => $data2['Image'],
                    'PasswordSession' => $this->request->getVar('inputPasswordSession'),
                    'DateSession' => $this->request->getVar('inputDateSession'),
                    'DateSessionL' => $this->request->getVar('inputDateSessionL'),
                    'View' =>  $data2['View'],
                    'Versi' => $versi
                ];

                if ($versi == "lastUpdate") {
                    session()->set($sessionData);
                    return redirect()->to('');
                } else if ($versi == "Lite") {
                    session()->set($sessionData);
                    return redirect()->to('');
                } else if ($versi == "Chat") {
                    session()->set($sessionData);
                    return redirect()->to('/chat');
                } else if ($versi == "Mobile") {
                    session()->set($sessionData);
                    return redirect()->to('/mobile');
                } else if ($versi == "BETA") {
                    session()->set($sessionData);
                    return redirect()->to('/beta');
                } else if ($versi == "Custom") {
                    session()->set($sessionData);
                    return redirect()->to('/custom');
                }

            } else {
                session()->setFlashdata('PasswordSS', 'Password is wrong!');
                return redirect()->to('/login_chat');
            }
        } else {
            session()->setFlashdata('UserNameSS', 'Email or username is not found!');
            return redirect()->to('/login_chat');
        }
    }

    public function color($id) {

        $password = $this->request->getVar('inputPS');

        $this->userRegistrasi->save([
            'id' => $id,
            'Color' => $this->request->getVar('inputColor'),
            'Image' => $this->request->getVar('inputImage'),
        ]);

        $data = $this->userRegistrasi->where('ID', $id)->first();
        $sessionData = [
            'ID' => $data['ID'],
            'Name' => $data['Name'],
            'Email' => $data['Email'],
            'UserName' => $data['UserName'],
            'Password' => $data['Password'],
            'WhatsApp' => $data['WhatsApp'],
            'Instagram' => $data['Instagram'],
            'Facebook' => $data['Facebook'],
            'Profil' => $data['Profil'],
            'Pangkat' => $data['Pangkat'],
            'Color' => $data['Color'],
            'Image' => $data['Image'],
            'PasswordSession' => $password,
            'View' =>  $data['View']
        ];
        session()->set($sessionData);
        return redirect()->to('');
    }

    public function colornull() {

        $color = $this->request->getVar('inputColor');
        $image = $this->request->getVar('inputImage');

        $sessionData = [
            'Color' => $color,
            'Image' => $image
        ];
        session()->set($sessionData);
        return redirect()->to('');
    }

    public function image($id) {

        $password = $this->request->getVar('inputPS');

        $this->userRegistrasi->save([
            'id' => $id,
            'Image' => $this->request->getVar('inputImage'),
        ]);

        $data = $this->userRegistrasi->where('ID', $id)->first();
        $sessionData = [
            'ID' => $data['ID'],
            'Name' => $data['Name'],
            'Email' => $data['Email'],
            'UserName' => $data['UserName'],
            'Password' => $data['Password'],
            'WhatsApp' => $data['WhatsApp'],
            'Instagram' => $data['Instagram'],
            'Facebook' => $data['Facebook'],
            'Profil' => $data['Profil'],
            'Pangkat' => $data['Pangkat'],
            'Color' => $data['Color'],
            'Image' => $data['Image'],
            'PasswordSession' => $password,
            'View' =>  $data['View']
        ];
        session()->set($sessionData);
        return redirect()->to('');
    }

    public function imagenull() {

        $image = $this->request->getVar('inputImage');

        $sessionData = [
            'Image' => $image
        ];
        session()->set($sessionData);
        return redirect()->to('');
    }

    public function update($id) {

        $beforeUpdate = $this->userRegistrasi->getUserName(session()->get('UserName'));
        if ($beforeUpdate['UserName'] == $this->request->getVar('inputUserName')) {
            $rule_username = 'required';
        } else {
            $rule_username = 'required|is_unique[registrasi.UserName]';
        }
        if ($beforeUpdate['Email'] == $this->request->getVar('inputEmail')) {
            $rule_email = 'required';
        } else {
            $rule_email = 'required|is_unique[registrasi.Email]';
        }

        if (!$this->validate([
            'inputUserName' => [
                'rules' => $rule_username,
                'errors' => [
                    'required' => 'Username is required!',
                    'is_unique' => 'Username already exists!'
                ]
            ],
            'inputEmail' => [
                'rules' => $rule_email,
                'errors' => [
                    'required' => 'Email is required!',
                    'is_unique' => 'Email already exists!'
                ]
            ],
            'inputProfil' => [
                'rules' => 'max_size[inputProfil,51200]|is_image[inputProfil]|mime_in[inputProfil,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'max_size' => 'Maximum photo file size is 50 MB!',
                    'is_image' => 'File format not supported!',
                    'mime_in' => 'File format not supported!'
                ]
            ],
            'inputPasswordX' => [
                'rules' => 'matches[inputPassword]',
                'errors' => [
                    'matches' => '(Incorrect password confirmation!)',
                ]
            ]
        ])) {

            return redirect()->to('userdata_update/' . session()->get('UserName'))->withInput();
        }


        $idProfil = $this->userRegistrasi->where('ID', $id)->first();

        $profil = $this->request->getFile('inputProfil');
        if ($profil->getError() == 4) {
            $profilname = $idProfil['Profil'];
        } else {
            $outputProfil = $this->request->getFile('inputProfil');
            $profilname = $outputProfil->getRandomName();
            $outputProfil->move('ProfilUser/', $profilname);

            if ($idProfil['Profil'] !== 'Unknown.jpg') {
                unlink('ProfilUser/' . $idProfil['Profil']);
            }
        }

        // Pembatas

        $WhatsApp = $this->request->getVar('inputWhatsApp');
        if ($WhatsApp !== "") {
            $wa = $this->request->getVar('inputWhatsApp');
        } else {
            $wa = '-';
        }

        $Instagram = $this->request->getVar('inputInstagram');
        if ($Instagram !== "") {
            $ig = $this->request->getVar('inputInstagram');
        } else {
            $ig = '-';
        }

        $Facebook = $this->request->getVar('inputFacebook');
        if ($Facebook !== "") {
            $fb = $this->request->getVar('inputFacebook');
        } else {
            $fb = '-';
        }

        // Pembatas  

        $idAdminX = $this->userRegistrasi->where('ID', $id)->first();

        $idAdmin = $this->request->getVar('inputAdminID');
        if ($idAdmin == "") {
            $pangkat = $idAdminX['Pangkat'];
        } else {
            $voucher = $this->request->getVar('inputAdminID');
            if ($voucher == env('VOUCHER_ADMIN')) {
                $pangkat = 'Admin';
            } else if ($voucher == env('VOUCHER_OWNER')) {
                $pangkat = 'CEO';
            } else {
                $pangkat = 'User';
            }
        }

        $username = url_title($this->request->getVar('inputUserName'), '_', true);

        $this->userRegistrasi->save([
            'id' => $id,
            'Name' => $this->request->getVar('inputName'),
            'Email' => $this->request->getVar('inputEmail'),
            'UserName' => $username,
            'Password' => password_hash($this->request->getVar('inputPassword'), PASSWORD_DEFAULT),
            'WhatsApp' => $wa,
            'Instagram' => $ig,
            'Facebook' => $fb,
            'Profil' => $profilname,
            'Pangkat' => $pangkat,
            'Color' => $this->request->getVar('inputColor'),
            'Wallpaper' => $this->request->getVar('inputWallpaper')
        ]);

        return redirect()->to('/logout');
    }


    public function updatepangkat($id) {

        $idUserName = $this->userRegistrasi->where('ID', $id)->first();

        $this->userRegistrasi->save([
            'id' => $id,
            'Pangkat' => $this->request->getVar('inputAdminCEO')
        ]);

        return redirect()->to('userdata/' . $idUserName['UserName']);
    }

    public function deleteuser($username) {
        $userID = $this->userRegistrasi->where('UserName', $username)->first();
        $id = $userID['ID'];

        $idProfil = $this->request->getVar('Profil');
        if ($idProfil !== 'Unknown.jpg') {
            unlink('ProfilUser/' . $idProfil);
        } else if ($idProfil == "") {
            
        }

        $this->userRegistrasi->delete($id);

        if (session()->get('ID') !== $id) {
            return redirect()->to('');
        } else {
            return redirect()->to('/logout');
        }
    }
}