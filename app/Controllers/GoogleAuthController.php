<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class GoogleAuthController extends Controller
{
    public function login()
    {
        $client = \GoogleClient::getHttpClient();
        $authUrl = $client->createAuthUrl();
        return redirect()->to($authUrl);
    }

    public function callback()
    {
        $client = \GoogleClient::getHttpClient();
        $code = $this->request->getVar('code');
        $token = $client->fetchAccessTokenWithAuthCode($code);

        if (!isset($token['error'])) {
            $client->setAccessToken($token['access_token']);
            $service = new \Google_Service_Oauth2($client);
            $userData = $service->userinfo->get();

            // Simpan data pengguna di database
            $this->saveUserToDatabase($userData);

            // Tambahkan logika login pengguna di sini
            // Misalnya, set session dan redirect ke halaman dashboard
        } else {
            // Handle error, redirect to login page, etc.
        }
    }

    private function saveUserToDatabase($userData)
    {
        // Simpan data pengguna (email/username) ke database Anda
        // Misalnya, gunakan model untuk menyimpan data tersebut
    }
}