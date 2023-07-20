<?php

namespace App\Http\Controllers\Admin\Edukasi\Webinar;

use App\Http\Controllers\Controller;
use App\Http\Requests\Edukasi\Webinar\WebinarRequest;
use App\Models\Webinar;
use App\Services\PathFileService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class WebinarController extends Controller
{
    private $pathFileService;

    public function __construct(PathFileService $pathFileService)
    {
        $this->pathFileService = $pathFileService;
    }

    public function index(): View
    {
        $webinar = Webinar::where('is_done', false)->get();
        return view('admin.webinar.index', compact('webinar'));
    }

    public function create(): View
    {
        return view('admin.webinar.create');
    }

    public function store(WebinarRequest $request): RedirectResponse
    {
        $data = $request->validated();
        if($request->hasFile('photo'))
        {
            $data['photo'] = $this->pathFileService->getPath($request->photo);
        }
        Webinar::create($data);
        return redirect()->route('webinar.index')->with('success', 'Webinar berhasil ditambahkan');
    }

    public function edit(Webinar $webinar): View
    {
        return view('admin.webinar.edit', compact('webinar'));
    }

    public function update(WebinarRequest $request, Webinar $webinar): RedirectResponse
    {
        $data = $request->validated();
        if ($request->hasFile('photo')) {
            Storage::disk('public')->delete($webinar->photo);
            $data['photo'] = $this->pathFileService->getPath($request->photo);
        }
        $webinar->update($data);
        return redirect()->route('webinar.index')->with('success', 'Webinar berhasil diperbarui');
    }

    public function destroy(Webinar $webinar):RedirectResponse
    {
        Storage::disk('public')->delete($webinar->photo);
        $webinar->delete();
        return redirect()->route('webinar.index')->with('success', 'Webinar berhasil dihapus');
    }
}
