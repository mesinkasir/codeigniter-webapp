<?php

namespace App\Controllers;

class Home extends BaseController
{
   public function index()
    {
        $data = array(
            'title' => 'Codeiginter Web App',
            'desc' => 'Free download source code full code iginter web app present by axcora technology visit site www.axcora.com.',
            'cover' => 'https://axcora.com/img/aplikasi belajar online sekolah e-learning.jpg',
            'content' => 'Download this source code or clone it then run composer install & php spark serve - open localhost:8080.',
            'btn1' => 'website',
            'btn1url' => '#website',
            'btn2' => 'aplikasi',
            'btn2url' => '#app',
            'cinema' => 'PCcw4e-L_ZM',
            'section1cover' => 'img/company profile.jpg',
            'section1title' => 'Lorep Ipsum',
            'section1desc' => 'Lorep ipsum dolor siamet amet jabang bayi',
            'section1content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'section1url' => '/website',
            'cinema1' => 'mDs8BirlC5o',
            'section2cover' => 'https://axcora.com/img/aplikasi pembayaran sekolah online brochure.jpg',
            'section2title' => 'Semelohe',
            'section2desc' => 'Oh.. aseloley aseloley.',
            'section2content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
            'section2url' => '/aplikasi',
            'cinema2' => '1EXPj8tkKzI',
            'section3mockup1' => 'https://axcora.com/img/android/themes/pembuatan%20aplikasi%20android%20(1).jpg',
            'section3mockup2' => 'https://axcora.com/img/android/themes/pembuatan%20aplikasi%20android%20(5).jpg',
            'section3mockup3' => 'https://axcora.com/img/android/themes/pembuatan%20aplikasi%20android%20(6).jpg',
            'section3mockup4' => 'https://axcora.com/img/android/themes/pembuatan%20aplikasi%20android%20(9).jpg',
            'section3mockup5' => 'https://axcora.com/img/android/themes/pembuatan%20aplikasi%20android%20(13).jpg',
            'section3mockup6' => 'https://axcora.com/img/android/themes/pembuatan%20aplikasi%20android%20(16).jpg',
            'section3mockup7' => 'https://axcora.com/img/android/themes/pembuatan%20aplikasi%20android%20(20).jpg',
            'section3title' => 'Hello wan abut',
            'cinema3' => 'zb45J14gNUY',
            'section3content' => 'Apa kabar wan abut juragan siomay dan ketoprak plus tahu tek seantero dunia',
            'section3url' => '/android',
            'section3btn' => 'android info',
            'foottitle' => 'Need Help ??',
            'footdesc' => 'Just Contact Us',
            'footbtnurl' => '/contact',
            'footbtn1url' => 'https://axcora.com',
            'footbtn' => 'Contact',
            'footbtn1' => 'Axcora',
            
    );
        return view('welcome_message', $data);
    }

}