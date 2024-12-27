<?php

namespace App\Controllers;

use Ratchet\Server\IoServer;
use App\Libraries\group;

class Server extends BaseController {
    protected $createAdmin;
    protected $kolomKomentar;
    protected $userRegistrasi;
    protected $chatGroup;


    public function index() {

        if (!is_cli())
        die ('Not this time, mate!');

        $server = IoServer::factory(
            new group(),
            8080
        );
    
        $server->run();
    }

}