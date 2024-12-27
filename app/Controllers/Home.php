<?php

namespace App\Controllers;

class Home extends BaseController {
    protected $createAdmin;
    protected $kolomKomentar;
    protected $kolomTugas;
    protected $userRegistrasi;
    protected $chatGroup;
    protected $chat;


    public function __construct() {
        $this->createAdmin = new \App\Models\CreateModels();
        $this->kolomKomentar = new \App\Models\KomentarModels();
        $this->kolomTugas = new \App\Models\TugasModels();
        $this->userRegistrasi = new \App\Models\RegistrasiModels();
        $this->chatGroup = new \App\Models\GroupModels();
        $this->chat = new \App\Models\ChatModels();
    }


    public function getData()
    {
        $data = file_get_contents('http://localhost:8080/apicontroller');
        $result = json_decode($data, true);

        return view('apiView', $result);
    }



    // Induk

    public function index() {

        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $Search = $this->createAdmin->search($keyword);
        } else {
            $Search = $this->createAdmin;
        }

        // $data['topViews'] = $this->createAdmin->getTopViews(3); // Mengambil 3 data teratas

        $data = [
            'createAdmin' => $Search->orderBy('id', 'DESC')->paginate(14, 'home'),
            'topViews' => $this->createAdmin->orderBy('View', 'DESC')->paginate(3, 'home2'),
            'pager' => $this->createAdmin->pager,
            'userX' => $this->userRegistrasi->getUserName(),
            'chatGroup' => $this->chatGroup->findAll(),
            'user' => $this->userRegistrasi
        ];
           
        if (session()->get("Versi") == "Lite" || session()->get("UserName") == null) {
            echo view('layout/headerLite', $data);
            echo view('layout/color');
            echo view('admin', $data);
            echo view('layout/footerLite', $data);
        } else {
            echo view('layout/header', $data);
            echo view('layout/navbarPopUp', $data);
            echo view('layout/fiturGroupFloating', $data);
            echo view('layout/fitur', $data);
            echo view('layout/fiturHome', $data);
            echo view('layout/navbar', $data);
            echo view('layout/color');
            echo view('admin', $data);
            echo view('layout/footer', $data);
        }
    }

    public function chatmenu() {

        if (session()->get("ID") == null) {
            return redirect()->to('/login_chat');
        } else {

            $data = [
                'userX' => $this->userRegistrasi->getUserName(),
                'chat' => $this->chat->findAll(),
                'chatGroupView' => $this->chatGroup->orderBy('id', 'DESC')->findAll(),
                'chatView' => $this->chat->orderBy('id', 'DESC')->findAll(),
                'user' => $this->userRegistrasi
            ];

                echo view('layout/headerChat', $data);
                echo view('layout/fitur', $data);
                echo view('layout/color');
                echo view('layout/fiturChatMenu', $data);
        }
    }

    public function chatgroup() {

        if (session()->get("ID") == null) {
            return redirect()->to('/login_chat');
        } else {
            $data = [
                'userX' => $this->userRegistrasi->getUserName(),
                'chatGroup' => $this->chatGroup->findAll(),
                'chatGroupView' => $this->chatGroup->orderBy('id', 'DESC')->findAll(),
                'chatView' => $this->chat->orderBy('id', 'DESC')->findAll(),
                'user' => $this->userRegistrasi
            ];

            echo view('layout/headerChat', $data);
            echo view('layout/fitur', $data);
            echo view('layout/color');
            echo view('layout/fiturChatGroup', $data);
        }
    }

    public function chat($username) {

        if (session()->get("ID") == null) {
            return redirect()->to('/login_chat');
        } else {

            $db = $this->userRegistrasi->where('UserName', $username)->first();
            if ($db == null | session()->get('UserName') == $username) {
                return redirect()->to('/chat');
            }

            $userID = $this->userRegistrasi->where('UserName', $username)->first();
            $idDikirim = $userID['ID'];
            $name = $userID['Name'];
            $profil = $userID['Profil'];

            $data = [
                'userX' => $this->userRegistrasi->getUserName(),
                'chatX' => $this->userRegistrasi->getUserName($username),
                'chat' => $this->chat->findAll(),
                'chatGroupView' => $this->chatGroup->orderBy('id', 'DESC')->findAll(),
                'chatView' => $this->chat->orderBy('id', 'DESC')->findAll(),
                'Dikirim' => $idDikirim,
                'user' => $this->userRegistrasi,
                'Name' => $name,
                'Profil' => $profil
            ];

            echo view('layout/headerChat', $data);
            echo view('layout/fitur', $data);
            echo view('layout/color');
            echo view('layout/fiturChat', $data);
        }
    }
    public function chatviewer($id) {

        if (session()->get("ID") == null) {
            return redirect()->to('/login_chat');
        } else {

            $db = $this->userRegistrasi->where('ID', $id)->first();
            if ($db == null) {
                return redirect()->to('/chat');
            }

            $view = $this->userRegistrasi->where('ID', $id)->first();
            if (session()->get('UserName') !== $view['UserName']) {
                    $this->userRegistrasi->save([
                        'id' => $view['ID'],
                        'View' => $view['View'] + 1
                ]);
            }
            return redirect()->to('chat/' . $view['UserName']);
        }
    }
    
    public function kalkulator() {
        return view('kalkulator');
    }
    public function mobile() {
        if(session()->get("UserName") == null) {
            return redirect()->to('/login');
        } else {
            return view('mobile');
        }
    }

    public function belisusu() {
        return view('beliSusu');
    }


    public function detail($slug) {

        helper('text');

        $db = $this->createAdmin->where('Slug', $slug)->first();
        if ($db == null) {
            return redirect()->to('');
        }

        $data = [
            'validation' => \Config\Services::validation(),
            'createAdmin' => $this->createAdmin->getCreateAdminSlug($slug),
            'createAdminX' => $this->createAdmin->getCreateAdmin(),
            'userX' => $this->userRegistrasi->getUserName(),
            'kolomKomentar' => $this->kolomKomentar,
            'kolomTugas' => $this->kolomTugas,
            'user' => $this->userRegistrasi
        ];
            
        if (session()->get("Versi") == "Lite" || session()->get("UserName") == null) {
            echo view('layout/headerNonLite', $data);
            echo view('layout/color');
            echo view('detailLite', $data);
            echo view('detailInti', $data);
            echo view('layout/komentar', $data);
            echo view('layout/footerDetailLite', $data);
        } else {
            echo view('layout/headerNonSearching', $data);
            echo view('layout/fiturBot', $data);
            echo view('layout/fitur', $data);
            echo view('layout/color');
            echo view('detail', $data);
            echo view('detailInti', $data);
            echo view('layout/komentar', $data);
            echo view('layout/footerDetail', $data);
        }
    }
    public function detailviewer($id) {
        $db = $this->createAdmin->where('ID', $id)->first();
        if ($db == null) {
            return redirect()->to('');
        }
        
        $view = $this->createAdmin->where('ID', $id)->first();
        $this->createAdmin->save([
            'id' => $view['ID'],
            'View' => $view['View'] + 1
        ]);
        return redirect()->to('article/' . $view['Slug']);
    }

    public function create() {
        session();
        $data = [
            'validation' => \Config\Services::validation(),
            'user' => $this->userRegistrasi
        ];

        if (session()->get("Pangkat") == "CEO") {
            echo view('create', $data);
            echo view('layout/color');
        } else if (session()->get("Pangkat") == "Admin") {
            echo view('create', $data);
            echo view('layout/color');
        } else {
            return redirect()->to('');
        }
    }

    public function edit($slug) {
        $db = $this->createAdmin->where('Slug', $slug)->first();
        if ($db == null) {
            return redirect()->to('');
        }

        $data = [
            'validation' => \Config\Services::validation(),
            'kolomKomentar' => $this->kolomKomentar,
            'createAdmin' => $this->createAdmin->getCreateAdminSlug($slug),
            'user' => $this->userRegistrasi
        ];

        if (session()->get("Pangkat") == "CEO") {
            echo view('editHome', $data);
            echo view('layout/edit', $data);
            echo view('layout/color');
            echo view('layout/footerEditDelete', $data);
        } else if (session()->get("Pangkat") == "Admin") {
            echo view('editHome', $data);
            echo view('layout/edit', $data);
            echo view('layout/color');
            echo view('layout/footerEditDelete', $data);
        } else {
            return redirect()->to('');
        }
    }
    public function editdetail($slug) {
        $db = $this->createAdmin->where('Slug', $slug)->first();
        if ($db == null) {
            return redirect()->to('');
        }

        $data = [
            'validation' => \Config\Services::validation(),
            'kolomKomentar' => $this->kolomKomentar,
            'createAdmin' => $this->createAdmin->getCreateAdminSlug($slug),
            'user' => $this->userRegistrasi
        ];

        if (session()->get("Pangkat") == "CEO") {
            echo view('editDetail', $data);
            echo view('layout/edit', $data);
            echo view('layout/color');
            echo view('layout/footerEditDelete', $data);
        } else if (session()->get("Pangkat") == "Admin") {
            echo view('editDetail', $data);
            echo view('layout/edit', $data);
            echo view('layout/color');
            echo view('layout/footerEditDelete', $data);
        } else {
            return redirect()->to('');
        }
    }

    public function deleteview($slug) {
        $db = $this->createAdmin->where('Slug', $slug)->first();
        if ($db == null) {
            return redirect()->to('');
        }

        $data = [
            'createAdmin' => $this->createAdmin->getCreateAdminSlug($slug),
            'komentar' => $this->kolomKomentar->getUserName($slug),
            'kolomKomentar' => $this->kolomKomentar,
            'user' => $this->userRegistrasi
        ];

        if (session()->get("Pangkat") == "CEO") {
            echo view('deleteView', $data);
            echo view('layout/color');
            echo view('layout/footerEditDelete', $data);
        } else if (session()->get("Pangkat") == "Admin") {
            echo view('deleteView', $data);
            echo view('layout/color');
            echo view('layout/footerEditDelete', $data);
        } else {
            return redirect()->to('');
        }
    }

    // Induk

    public function percobaan() {
        return view('index');
    }
    public function connect() {
        return view('connect');
    }
    public function data() {
        return view('data');
    }

    // Akun

    public function datauser($username) {
        if(session()->get("UserName") == null) {
            return redirect()->to('/beta');
        } else {
            $userID = $this->userRegistrasi->where('UserName', $username)->first();
            $id = $userID['ID'];

            $db = $this->userRegistrasi->where('ID', $id)->first();
            if ($db == null) {
                return redirect()->to('');
            }

            $data = [
                'userX' => $this->userRegistrasi->getUserName(),
                'userData' => $this->userRegistrasi->getUserID($id),
                'user' => $this->userRegistrasi
            ];

            echo view('layout/headerNonSearching', $data);
            echo view('layout/fiturBot', $data);
            echo view('layout/fitur', $data);
            echo view('layout/color');
            echo view('datauser', $data);
        }
    }
    public function datauserviewer($id) {

        $db = $this->userRegistrasi->where('ID', $id)->first();
        if ($db == null) {
            return redirect()->to('');
        }

        $view = $this->userRegistrasi->where('ID', $id)->first();
        if (session()->get('UserName') !== $view['UserName']) {
                $this->userRegistrasi->save([
                    'id' => $view['ID'],
                    'View' => $view['View'] + 1
            ]);
        }
        return redirect()->to('userdata/' . $view['UserName']);
    }

    public function registrasi() {
        session();
        $data = [
            'validation' => \Config\Services::validation(),
        ];
        echo view('registrasiHome', $data);
        echo view('/layout/registrasi', $data);
    }
    public function registrasichat() {
        session();
        $data = [
            'validation' => \Config\Services::validation(),
        ];
        echo view('registrasiChat', $data);
        echo view('/layout/registrasi', $data);
    }

    public function login() {
        echo view('loginHome');
        echo view('/layout/login');
    }
    public function loginchat() {
        echo view('loginChat');
        echo view('/layout/login');
    }

    public function logout() {
        session()->destroy();
        return redirect()->to('/login');
    }
    public function logoutchat() {
        session()->destroy();
        return redirect()->to('/login_chat');
    }

    // Induk



    // Fitur

    public function registrasiupdate($username) {
        $db = $this->userRegistrasi->where('UserName', $username)->first();
        if ($db == null) {
            return redirect()->to('');
        }

        $data = [
            'validation' => \Config\Services::validation(),
            'userRegistrasi' => $this->userRegistrasi->getUserName($username),
            'user' => $this->userRegistrasi
        ];

        if (session()->get("Pangkat") !== null) {
            if ($db['UserName'] == session()->get("UserName") || session()->get("Pangkat") == "CEO") {   
                echo view('layout/color');
                echo view('registrasiupdate', $data);
            } else {
                return redirect()->to('');
            }
        } else {
            return redirect()->to('/login');
        }
    }

    public function editcomment($id) {
        $db = $this->kolomKomentar->where('ID', $id)->first();
        if ($db == null) {
            return redirect()->to('');
        }

        $data = [
            'createAdmin' => $this->createAdmin->getCreateAdmin($db['IDArtikel']),
            'createAdminX' => $this->createAdmin,
            'validation' => \Config\Services::validation(),
            'kolomKomentar' => $this->kolomKomentar,
            'komentarData' => $this->kolomKomentar->getKomentar($id),
            'user' => $this->userRegistrasi
        ];

        if (session()->get("Pangkat") !== null) {
            if (session()->get("ID") == $db['IDUserName']) {
                echo view('editComment', $data);
                echo view('layout/color');
                echo view('layout/footerEditDelete', $data);
            } else {
                return redirect()->to('');
            }
        } else {
            return redirect()->to('');
        }
    }

    public function editchatgroup($id) {
        $db = $this->chatGroup->where('ID', $id)->first();
        if ($db == null) {
            return redirect()->to('');
        }

        $data = [
            'chatGroup' => $this->chatGroup->getChatUserName($id),
            'user' => $this->userRegistrasi,
        ];

        if (session()->get("Pangkat") !== null) {
            if (session()->get("ID") == $db['IDUserName']) {
                echo view('layout/color');
                echo view('editChatGroup', $data);
            } else {
                return redirect()->to('');
            }
        } else {
            return redirect()->to('');
        }
    }
    public function editchatgroupmain($id) {
        $db = $this->chatGroup->where('ID', $id)->first();
        if ($db == null) {
            return redirect()->to('/chat_group');
        }

        $data = [
            'chatGroup' => $this->chatGroup->getChatUserName($id),
            'user' => $this->userRegistrasi,
        ];

        if (session()->get("Pangkat") !== null) {
            if (session()->get("ID") == $db['IDUserName']) {
                echo view('layout/color');
                echo view('editChatGroupMain', $data);
            } else {
                return redirect()->to('/chat_group');
            }
        } else {
            return redirect()->to('/chat_group');
        }
    }

    public function editchat($id) {
        $db = $this->chat->where('ID', $id)->first();
        if ($db == null) {
            return redirect()->to('/chat');
        }

        $chatID = $this->chat->where('ID', $id)->first();
        $idDikirim = $chatID['IDDikirim'];

        $userID = $this->userRegistrasi->where('ID', $idDikirim)->first();
        $username = $userID['UserName'];

        $data = [
            'chatGroup' => $this->chat->getChatUserName($id),
            'user' => $this->userRegistrasi,
            'userName' => $username,
        ];

        if (session()->get("Pangkat") !== null) {
            if (session()->get("ID") == $db['IDPengirim']) {
                echo view('layout/color');
                echo view('editChat', $data);
            } else {
                return redirect()->to('/chat');
            }
        } else {
            return redirect()->to('/chat');
        }
    }

    public function deletecomment($id) {
        $db = $this->kolomKomentar->where('ID', $id)->first();
        if ($db == null) {
            return redirect()->to('');
        }

        $data = [
            'createAdmin' => $this->createAdmin->getCreateAdmin($db['IDArtikel']),
            'createAdminX' => $this->createAdmin,
            'kolomKomentar' => $this->kolomKomentar,
            'userData' => $this->userRegistrasi->getUserName(),
            'user' => $this->userRegistrasi,
            'komentarData' => $this->kolomKomentar->getKomentar($id),
        ];

        $datauser = $this->userRegistrasi->where('ID', $db['IDUserName'])->first();

        if (session()->get("Pangkat") !== null) {
            if (session()->get("ID") == $db["IDUserName"]) {
                echo view('deleteComment', $data);
                echo view('layout/color');
                echo view('layout/footerEditDelete', $data);
            } else if (session()->get("Pangkat") == "CEO") {
                echo view('deleteComment', $data);
                echo view('layout/color');
                echo view('layout/footerEditDelete', $data);
            } else if (session()->get("Pangkat") == "Admin") {
                if ($datauser == null) {
                    echo view('deleteComment', $data);
                    echo view('layout/color');
                    echo view('layout/footerEditDelete', $data);
                } else if ($datauser['Pangkat'] == "CEO") {
                    return redirect()->to('');
                } else if ($datauser !== null) {
                    echo view('deleteComment', $data);
                    echo view('layout/color');
                    echo view('layout/footerEditDelete', $data);
                } else {
                    return redirect()->to('');
                }
            } else {
                return redirect()->to('');
            }
        } else {
            return redirect()->to('login');
        }
    }

    public function deletechatgroup($id) {
        $db = $this->chatGroup->where('ID', $id)->first();
        if ($db == null) {
            return redirect()->to('');
        }

        $data = [
            'chatGroup' => $this->chatGroup->getChatUserName($id),
            'user' => $this->userRegistrasi,
        ];

        $datauser = $this->userRegistrasi->where('ID', $db['IDUserName'])->first();

        if (session()->get("Pangkat") !== null) {
            if (session()->get("ID") == $db["IDUserName"]) {
                echo view('layout/color');
                echo view('deleteChatGroup', $data);
            } else if (session()->get("Pangkat") == "CEO") {
                echo view('layout/color');
                echo view('deleteChatGroup', $data);
            } else if (session()->get("Pangkat") == "Admin") {
                if ($datauser == null) {
                    echo view('layout/color');
                    echo view('deleteChatGroup', $data);
                } else if ($datauser['Pangkat'] == "CEO") {
                    return redirect()->to('');
                } else if ($datauser !== null) {
                    echo view('layout/color');
                    echo view('deleteChatGroup', $data);
                } else {
                    return redirect()->to('');
                }
            } else {
                return redirect()->to('');
            }
        } else {
            return redirect()->to('login');
        }
    }
    public function deletechatgroupmain($id) {
        $db = $this->chatGroup->where('ID', $id)->first();
        if ($db == null) {
            return redirect()->to('/chat_group');
        }

        $data = [
            'chatGroup' => $this->chatGroup->getChatUserName($id),
            'user' => $this->userRegistrasi,
        ];

        $datauser = $this->userRegistrasi->where('ID', $db['IDUserName'])->first();

        if (session()->get("Pangkat") !== null) {
            if (session()->get("ID") == $db["IDUserName"]) {
                echo view('layout/color');
                echo view('deleteChatGroupMain', $data);
            } else if (session()->get("Pangkat") == "CEO") {
                echo view('layout/color');
                echo view('deleteChatGroupMain', $data);
            } else if (session()->get("Pangkat") == "Admin") {
                if ($datauser == null) {
                    echo view('layout/color');
                    echo view('deleteChatGroupMain', $data);
                } else if ($datauser['Pangkat'] == "CEO") {
                    return redirect()->to('');
                } else if ($datauser !== null) {
                    echo view('layout/color');
                    echo view('deleteChatGroupMain', $data);
                } else {
                    return redirect()->to('/chat_group');
                }
            } else {
                return redirect()->to('/chat_group');
            }
        } else {
            return redirect()->to('login');
        }
    }

    public function deletechat($id) {
        $db = $this->chat->where('ID', $id)->first();
        if ($db == null) {
            return redirect()->to('/chat');
        }

        $chatID = $this->chat->where('ID', $id)->first();
        $idDikirim = $chatID['IDDikirim'];

        $userID = $this->userRegistrasi->where('ID', $idDikirim)->first();
        $username = $userID['UserName'];

        $data = [
            'chatGroup' => $this->chat->getChatUserName($id),
            'user' => $this->userRegistrasi,
            'userName' => $username,
        ];

        $datauser = $this->userRegistrasi->where('ID', $db['IDDikirim'])->first();

        if (session()->get("Pangkat") !== null) {
            if (session()->get("ID") == $db["IDDikirim"]) {
                echo view('layout/color');
                echo view('deleteChat', $data);
            } else if (session()->get("Pangkat") == "CEO") {
                echo view('layout/color');
                echo view('deleteChat', $data);
            } else if (session()->get("Pangkat") == "Admin") {
                if ($datauser == null) {
                    echo view('layout/color');
                    echo view('deleteChat', $data);
                } else if ($datauser['Pangkat'] == "CEO") {
                    return redirect()->to('');
                } else if ($datauser !== null) {
                    echo view('layout/color');
                    echo view('deleteChat', $data);
                } else {
                    return redirect()->to('/chat');
                }
            } else {
                return redirect()->to('/chat');
            }
        } else {
            return redirect()->to('login');
        }
    }
    public function deletechatother($id) {
        $db = $this->chat->where('ID', $id)->first();
        if ($db == null) {
            return redirect()->to('/chat');
        }

        $chatID = $this->chat->where('ID', $id)->first();
        $idPengirim = $chatID['IDPengirim'];

        $userID = $this->userRegistrasi->where('ID', $idPengirim)->first();
        $username = $userID['UserName'];

        $data = [
            'chatGroup' => $this->chat->getChatUserName($id),
            'user' => $this->userRegistrasi,
            'userName' => $username,
        ];

        $datauser = $this->userRegistrasi->where('ID', $db['IDDikirim'])->first();

        if (session()->get("Pangkat") !== null) {
            if (session()->get("ID") == $db["IDDikirim"]) {
                echo view('layout/color');
                echo view('deleteChatOther', $data);
            } else if (session()->get("Pangkat") == "CEO") {
                echo view('layout/color');
                echo view('deleteChatOther', $data);
            } else if (session()->get("Pangkat") == "Admin") {
                if ($datauser == null) {
                    echo view('layout/color');
                    echo view('deleteChatOther', $data);
                } else if ($datauser['Pangkat'] == "CEO") {
                    return redirect()->to('');
                } else if ($datauser !== null) {
                    echo view('layout/color');
                    echo view('deleteChatOther', $data);
                } else {
                    return redirect()->to('/chat');
                }
            } else {
                return redirect()->to('/chat');
            }
        } else {
            return redirect()->to('login');
        }
    }

    public function datauserdelete($username) {
        $userID = $this->userRegistrasi->where('UserName', $username)->first();
        $id = $userID['ID'];

        $db = $this->userRegistrasi->where('ID', $id)->first();
        if ($db == null) {
            return redirect()->to('/chat');
        }
        
        $data = [
            'userData' => $this->userRegistrasi->getUserID($id),
            'user' => $this->userRegistrasi
        ];

        if (session()->get("Pangkat") !== null) {
            if (session()->get("UserName") == $db["UserName"]) {
                echo view('deleteDatauser', $data);
                echo view('layout/color');
            } else if (session()->get("Pangkat") == "CEO") {
                echo view('deleteDatauser', $data);
                echo view('layout/color');
            } else if (session()->get("Pangkat") == "Admin") {
                if ($db["Pangkat"] !== "CEO") {
                    echo view('deleteDatauser', $data); 
                    echo view('layout/color');           
                } else {
                    return redirect()->to('/chat');
                }
            } else {
                return redirect()->to('/chat');
            }
        } else {
            return redirect()->to('login');
        }
    }

    // Fitur

}