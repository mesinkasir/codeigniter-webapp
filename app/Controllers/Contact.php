<?php

namespace App\Controllers;

class Contact extends BaseController
{
   public function index()
    {
        $data = array(
            'title' => 'Contact us',
            'desc' => 'Lorep Ipsum dolor siamet',
            'cover' => 'https://axcora.com/img/vector-art-3.png',
            'company' => 'Axcora Technology',
            'address' => 'Ruko Pasar Wisata Juanda Q.07',
            'city' => 'Sidoarjo - East Java - Indonesia',
            'call' => '+62895339403223',
            'wa' => '6285646104747',
            'email' => 'axcora@gmail.com',
           
    );
        return view('contact', $data);
    }

}