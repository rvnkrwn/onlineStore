<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Products extends BaseController
{
    public function index()
    {
        $navbar = $this->Navbars->findAll();
        $product = $this->Products->findAll();
        $data = [
            'name' => 'AbilaHijab',
            'title' => 'All Product',
            'menus' => $navbar,
            'product' => $product,
        ];
        return view('Product',$data);
    }
    public function detail(string $slug) {
        $navbar = $this->Navbars->findAll();
        $product = $this->Products->where(['name_product' => $slug])->first();
        if (empty($product)){
            throw new PageNotFoundException();
        }
        $data = [
            'name' => 'AbilaHijab',
            'title' => $slug,
            'menus' => $navbar,
            'p' => $product,
        ];
        return view('Detail',$data);
    }

    public function flashSale()
    {
        $navbar = $this->Navbars->findAll();
        $product = $this->Products->findAll();
        $data = [
            'name' => 'AbilaHijab',
            'title' => 'All Product',
            'menus' => $navbar,
            'product' => $product,
        ];
        return view('FlashSale',$data);
    }
}