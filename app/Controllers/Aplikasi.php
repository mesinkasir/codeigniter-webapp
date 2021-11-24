<?php

namespace App\Controllers;

class Aplikasi extends BaseController
{
   public function index()
    {
        $data = array(
            'url' => '/aplikasi',
            'title' => 'Sutoneng weleh weleh',
            'desc' => 'Alamakk weleh weleh tenan toh...',
            'cover' => 'img/invoice-android-ios-terbaru - Copy.jpg',
            'content' => 'Gunakan aplikasi invoice dan akuntansi dalam mendukung usaha dan bisnis. Nikmati layanan cloud web app dengan aplikasi office plus website, dan saat nya kini revolusi usaha dengan cloud web application',
            'app1' => 'Ajigur',
            'app1btn' => 'Ajigur bladigur manigur gebyur gebyur.',
            'app1url' => '/invoice',
            'app2' => 'Su tole',
            'app2btn' => 'Gundul gundul pacul cul.. gembelengan....',
            'app2cover' => 'img/aplikasi invoice handphone android ios windows.jpg',
            'app2url' => '/pos',
            'app3' => 'Pitik Cilik',
            'app3btn' => 'Aku duwe pitik cilik wulu ne brintik.',
            'app3url' => '/akuntansi',
            'app3cover' => 'img/aplikasi akuntansi.jpg',
           
    );
        return view('aplikasi', $data);
    }

}