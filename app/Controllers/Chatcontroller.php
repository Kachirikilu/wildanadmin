<?php

namespace App\Controllers;

class ChatController extends BaseController {

    protected $chatGroup;
    protected $chat;
    protected $createAdmin;
    protected $userRegistrasi;
    public function __construct() {
        $this->chatGroup = new \App\Models\GroupModels();
        $this->chat = new \App\Models\ChatModels();
        $this->createAdmin = new \App\Models\CreateModels();
        $this->userRegistrasi = new \App\Models\RegistrasiModels();
    }

    public function chatgroup() {

        $this->chatGroup->save([
            'IDUserName' => session()->get('ID'),
            'Chat' => $this->request->getVar('inputGroupChat'),
            'Time' => $this->request->getVar('inputTime'),
            'Date' => $this->request->getVar('inputDate')
        ]);

        return redirect()->to('');
    }
    public function chatgroupmain() {

        $this->chatGroup->save([
            'IDUserName' => session()->get('ID'),
            'Chat' => $this->request->getVar('inputGroupChat'),
            'Time' => $this->request->getVar('inputTime'),
            'Date' => $this->request->getVar('inputDate')
        ]);

        return redirect()->to('/chat_group');
    }


    public function chat() {

        $Dikirim = $this->request->getVar('inputDikirim');

        $username = $this->userRegistrasi->where('ID', $Dikirim)->first();
        $direct = $username['UserName'];

        $this->chat->save([
            'IDPengirim' => session()->get('ID'),
            'IDDikirim' => $Dikirim,
            'Chat' => $this->request->getVar('inputChat'),
            'Time' => $this->request->getVar('inputTime'),
            'Date' => $this->request->getVar('inputDate')
        ]);

        return redirect()->to('chat/' . $direct);
    }

    public function updatechatgroup($id) {

        $this->chatGroup->save([
            'id' => $id,
            'IDUserName' => session()->get('ID'),
            'Chat' => $this->request->getVar('inputChat')
        ]);

        return redirect()->to('');
    }
    public function updatechatgroupmain($id) {

        $this->chatGroup->save([
            'id' => $id,
            'IDUserName' => session()->get('ID'),
            'Chat' => $this->request->getVar('inputChat')
        ]);

        return redirect()->to('/chat_group');
    }

    public function updatechat($id) {

        $chatID = $this->chat->where('ID', $id)->first();
        $idDikirim = $chatID['IDDikirim'];

        $userID = $this->userRegistrasi->where('ID', $idDikirim)->first();
        $username = $userID['UserName'];

        $this->chat->save([
            'id' => $id,
            'IDPengirim' => session()->get('ID'),
            'Chat' => $this->request->getVar('inputChat')
        ]);

        return redirect()->to('chat/' . $username);
    }
    
    public function deletechatgroup($id) {
        $this->chatGroup->delete($id);
        return redirect()->to('');
    }
    public function deletechatgroupmain($id) {
        $this->chatGroup->delete($id);
        return redirect()->to('/chat_group');
    }

    public function deletechat($id) {

        $chatID = $this->chat->where('ID', $id)->first();
        $idDikirim = $chatID['IDDikirim'];

        $userID = $this->userRegistrasi->where('ID', $idDikirim)->first();
        $username = $userID['UserName'];
        
        $this->chat->delete($id);
        return redirect()->to('chat/' . $username);
    }
    public function deletechatother($id) {

        $chatID = $this->chat->where('ID', $id)->first();
        $idDikirim = $chatID['IDPengirim'];

        $userID = $this->userRegistrasi->where('ID', $idDikirim)->first();
        $username = $userID['UserName'];
        
        $this->chat->delete($id);
        return redirect()->to('chat/' . $username);
    }
}