<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('front/principal');
    }

    public function quienes_somos()
    {
        echo view('front/quienes_somos');
    }

    public function contacto()
    {
        echo view('front/contacto');
    }

    public function registrarse()
    {
        echo view('front/registrarse');
    }

    public function login()
    {
        echo view('front/login');
    }
}


