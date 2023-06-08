<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class EdukasiController extends Controller
{
    public function index(): View
    {
        return view('admin.index');
    }
}
