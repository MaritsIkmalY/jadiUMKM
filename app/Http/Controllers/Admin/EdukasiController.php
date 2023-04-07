<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EdukasiController extends Controller
{
    public function index()
    {
        return view('edukasi.index');
    }
}
