<?php

namespace App\Controllers;

class Android extends BaseController
{
   public function index()
    {
        $data = array(
            'url' => '/android',
            'title' => 'Hello Wandroid',
            'desc' => 'Hallo wan android.',
            'cover' => 'img/pembuatan aplikasi android.png',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'content1' => 'An open source code codeiginiter web app themes template',
            'content2' => 'Develope by axcora technology.',
            'content3' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'link' => 'https://android.axcora.com',
            'btn' => 'Pilih Themes Android',
           
    );
        return view('android', $data);
    }

}