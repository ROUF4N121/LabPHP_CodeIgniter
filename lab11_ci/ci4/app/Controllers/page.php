<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function home()
    {
        return view('home', [
            'title' => 'Home',
            'content' => 'Selamat datang di halaman Home'
        ]);
    }

    public function artikel()
    {
        return view('artikel', [
            'title' => 'Artikel',
            'content' => 'Ini halaman artikel'
        ]);
    }

    public function about()
    {
        return view('about', [
            'title' => 'About',
            'content' => 'Ini halaman about'
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'title' => 'Contact',
            'content' => 'Ini halaman contact'
        ]);
    }

    public function faqs()
    {
        return "Ini halaman FAQ";
    }

    public function tos()
    {
        return "Ini halaman Terms of Service";
    }
}