<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('siswa');
    }

    function coba()
    {
        echo "tai kucing";
    }
}
