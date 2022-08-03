<?php

namespace App\Controllers;

class User extends BaseController
{
    public function Register()
    {
        $navbar = $this->Navbars->findAll();
        $data = [
            'name' => $this->name,
            'title' => 'Register',
            'menus' => $navbar
        ];
        return view('Register',$data);
    }
    public function Saver()
    {
        $userid = rand();
        $name = $this->request->getVar('name');
        $arr = explode(" ",trim($name));
        $i = count($arr)-1;
        $firstname = $arr[0];
        $lastname = $arr[$i];
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $password = password_hash($password,PASSWORD_DEFAULT);

        $dataInsert = [
            'id'            => "",
            'user_id'       => $userid,
            'firstname'     => $firstname,
            'lastname'      => $lastname,
            'image'         => "https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png",
            'email'         => $email,
            'password'      => $password,
            'address1'      => '',
            'address2'      => '',
            'city'          => '',
            'postal_code'   => '',
            'province'      => '',
            'country'       => "Indonesia",
            'status_user'   => "active",
            'time_signup'   => '',
        ];

        $userModel = $this->UserModel;
        $savingDataUser = $userModel->insert($dataInsert);
        if ($savingDataUser) {
            $navbar = $this->Navbars->findAll();
            $data = [
                'name' => 'AbilaHijab',
                'title' => 'Login',
                'menus' => $navbar,
                'status' => 'success',
            ];
            return view('Login',$data);
            } else {
            $navbar = $this->Navbars->findAll();
            $data = [
                'name' => $this->name,
                'title' => 'Register',
                'menus' => $navbar,
                'status' => 'Sorry. That email has already been taken.',
            ];
            return view('Register',$data);
        }
    }

    public function Login()
    {
        $navbar = $this->Navbars->findAll();
        $data = [
            'name' => 'AbilaHijab',
            'title' => 'Login',
            'menus' => $navbar
        ];
        return view('Login',$data);
    }
    public function Checker()
    {
        var_dump($this->request->getVar());
    }
}