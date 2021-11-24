<?php

namespace App\Controllers;

class Akuntansi extends BaseController
{
   public function index()
    {
        $data = array(
            'url' => '/akuntansi',
            'title' => 'Codeiginiter web app',
            'desc' => 'Free download source code codeigniter web app by axcora technology',
            'cover' => 'https://axcora.com/img/vector-art-2.png',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'pricing' => 'Merdeka....!!! sekali lagi... Merdekaa....!!!',
            'video' => 'VAd3sqVBuvI',
            'download' => 'https://mesinkasir.github.io/e-catalog/Akuntansi Apps Milenial.pdf',
           
    );
        return view('akuntansi', $data);
    }

}