<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('tugas_dua');
    }
    public function listdata(): string
    {
        return view('list_data');
    }
}
