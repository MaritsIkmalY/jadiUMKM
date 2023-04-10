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
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $videos = Video::getFreeVideos();
        return view('edukasi.videos.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('edukasi.videos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VideoRequest $request)
    {
        $data = $request->validated();
        Video::newVideo($data);

        return redirect()->route('videos.index')->with('success', 'Video berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $video = Video::getVideoById($id);
        return view('edukasi.videos.edit', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VideoRequest $request, string $id)
    {
        $data = $request->validated();
        $video = Video::getVideoById($id);
        if ($video) {
            $video->update($data);
        }
        return redirect()->route('videos.index')->with('success', 'Video berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $video = Video::getVideoById($id);
        $video->delete();
        return redirect()->route('videos.index')->with('success', 'Video berhasil dihapus');
    }
}
