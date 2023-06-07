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

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $video = Video::getVideoById($id);
        return view('admin.videos.edit', compact('video'));
    }

    public function update(VideoRequest $request, string $id)
    {
        $data = $request->validated();
        $video = Video::getVideoById($id);
        if ($video) {
            $video->update($data);
        }
        return redirect()->route('videos.index')->with('success', 'Video berhasil diperbarui');
    }

    public function destroy(string $id)
    {
        $video = Video::getVideoById($id);
        $video->delete();
        return redirect()->route('videos.index')->with('success', 'Video berhasil dihapus');
    }
}
