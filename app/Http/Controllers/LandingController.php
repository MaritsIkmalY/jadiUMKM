<?php

namespace App\Http\Controllers;

use App\Models\ContentCreator;
use App\Models\ContentCreatorCategory;
use App\Models\Video;
use App\Models\Webinar;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    //
    public function home()
    {
        return view('landing-page');
    }

    public function video()
    {
        $videos = Video::getFreeVideos();

        return view('video', compact('videos'));
    }

    public function creator()
    {
        $categories = ContentCreatorCategory::all();
        $creators = ContentCreator::all();
        return view('creator', compact('creators', 'categories'));
    }

    public function edukasi()
    {
        return view('edukasi');
    }

    public function creatorDetail(String $id)
    {
        $creator = ContentCreator::find($id);
        return view('creator-detail', compact('creator'));
    }
    
    public function webinar() {
        $webinar = Webinar::all();
        return view('webinar', compact('webinar'));
    }
}
