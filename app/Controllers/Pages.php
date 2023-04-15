<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | RasCoding',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        // echo view('layout/header', $data);
        return view('pages/home', $data);
        // echo view('layout/footer');
    }

    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];
        // echo view('layout/header', $data);
        return view('pages/about', $data);
        // echo view('layout/footer');
        // return view(('pages/about'));
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. Rasl No. 243',
                    'kota' => 'Pasangkayu',
                    'Hp' => '082 19469 2885'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. Gatot No. 243',
                    'kota' => 'Makassar',
                    'hp' => '085 15746 6178'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
