<?php

namespace App\Http\Controllers\Admin\Edukasi;

use App\Http\Controllers\Controller;
use App\Models\Webinar;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class WebinarController extends Controller
{
    //
    public function index(): view
    {
        $webinar = Webinar::all();
        return view('edukasi.webinar.index', compact('webinar'));
    }
}
