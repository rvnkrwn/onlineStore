<?php

namespace App\Controllers;


class Home extends BaseController
{
    public function index()
    {
        $navbar = $this->Navbars->findAll();
        $product = $this->Products->findAll();
        $data = [
            'name' => 'AbilaHijab',
            'title' => 'Belanja Grosir Murah dan Berkualitas pastinya',
            'menus' => $navbar,
            'product' => $product,
        ];

        return view('Home',$data);
    }

    public function about()
    {
        $navbar = $this->Navbars->findAll();
        $product = $this->Products->findAll();
        $data = [
            'name' => 'AbilaHijab',
            'title' => 'Belanja Grosir Murah dan Berkualitas pastinya',
            'menus' => $navbar,
            'product' => $product,
        ];

        return view('About',$data);
    }
}
