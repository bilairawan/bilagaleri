<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Album extends Controller
{
    public function beranda(){
        return view('album');
    }
}
