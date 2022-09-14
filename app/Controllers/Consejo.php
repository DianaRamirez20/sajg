<?php

namespace App\Controllers;

class Consejo extends BaseController
{
    public function index()
    {
        $mensaje=session('mensaje');

        return view('consejo', [ 'mensaje'=> $mensaje]);
    }
}