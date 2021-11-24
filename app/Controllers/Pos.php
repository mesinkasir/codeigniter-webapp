<?php

namespace App\Controllers;

class Pos extends BaseController
{
   public function index()
    {
        $data = array(
            'url' => '/pos',
            'title' => 'Oh saleho...',
            'desc' => 'Kemana kemana kemana.. kucari dimana dimana.....',
            'cover' => 'https://axcora.com/img/web_hosting.png',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'pricing' => 'source code project by axcora technology',
            'video' => 'TWWvCNuH6uM',
            'download' => 'https://mesinkasir.github.io/e-catalog/Invoice point of sale app.pdf ',
           
    );
        return view('pos', $data);
    }

}