<?php

namespace App\Controllers;

class Custom extends BaseController {

    protected $createCustom;
    public function __construct() {
        $this->createCustom = new \App\Models\CustomModels();
    }

    public function share() {

        if(session()->get("UserName") == null) {
            return redirect()->to('/login');
        } else {
        $this->createCustom->save([
            'By' => $this->request->getVar('By'),
            'leftNavbar' => $this->request->getVar('leftNavbar'),
            'rightNavbar' => $this->request->getVar('rightNavbar'),
            'icon' => $this->request->getVar('icon'),
            'iconPlaceholder' => $this->request->getVar('iconPlaceholder'),
            'backgroundColumn' => $this->request->getVar('backgroundColumn'),
            'colorColumn' => $this->request->getVar('colorColumn'),
            'backgroundPage' => $this->request->getVar('backgroundPage'),
            'colorPage' => $this->request->getVar('colorPage'),
            'hoverPage' => $this->request->getVar('hoverPage'),
            'columnBorder' => $this->request->getVar('columnBorder'),
        ]); 
            return redirect()->to('/custom');
        }
    }

    public function deletecustom($id)
    {
        $this->createCustom->delete($id);
        return redirect()->to('custom_view');
    }
}