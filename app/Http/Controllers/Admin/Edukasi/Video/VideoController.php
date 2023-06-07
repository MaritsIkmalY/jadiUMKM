<?php

namespace App\Http\Controllers\Admin\Edukasi\Video;

use App\Http\Controllers\Controller;
use App\Http\Requests\Edukasi\Video\VideoRequest;
use App\Models\Video;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class VideoController extends Controller
{

    public function index()
    {
        $videos = Video::getFreeVideos();
        return view('admin.videos.index', compact('videos'));
    }

    public function create()
    {
        return view('admin.videos.create');
    }
  
    public function store(VideoRequest $request)
    {
        $data = $request->validated();
        Video::newVideo($data);

        return redirect()->route('videos.index')->with('success', 'Video berhasil ditambahkan');
    }

    public function show(Video $video)
    {
        //
    }

    public function edit(Video $video)
    {
        return view('admin.videos.edit', compact('video'));
    }

    public function update(VideoRequest $request, Video $video)
    {
        $data = $request->validated();
        $video->update($data);

        return redirect()->route('videos.index')->with('success', 'Video berhasil diperbarui');
    }

    public function destroy(Video $video)
    {
        $video->delete();

        return redirect()->route('videos.index')->with('success', 'Video berhasil dihapus');
    }
}
