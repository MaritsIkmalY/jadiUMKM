<?php

namespace App\Http\Controllers\Admin\Edukasi\Video;

use App\Http\Controllers\Controller;
use App\Http\Requests\Edukasi\Video\VideoRequest;
use App\Models\Video;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;


class VideoController extends Controller
{
    public function index(): View
    {
        return view('admin.videos.index');
    }

    public function create(): View
    {
        return view('admin.videos.create');
    }

    public function store(VideoRequest $request): RedirectResponse
    {
        Video::create($request->validated());
        return redirect()->route('videos.index')->with('success', 'Video berhasil ditambahkan');
    }

    public function edit(Video $video): View
    {
        return view('admin.videos.edit', compact('video'));
    }

    public function update(VideoRequest $request, Video $video): RedirectResponse
    {
        $video->update($request->validated());
        return redirect()->route('videos.index')->with('success', 'Video berhasil diperbarui');
    }

    public function destroy(Video $video): RedirectResponse
    {
        $video->delete();
        return redirect()->route('videos.index')->with('success', 'Video berhasil dihapus');
    }
}
