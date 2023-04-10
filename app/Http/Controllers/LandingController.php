<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    //
    public function home() {
        return view('landing-page');
    }

    public function video() {
        $videos = Video::getFreeVideos();

        return view('video', compact('videos'));
    }
}
