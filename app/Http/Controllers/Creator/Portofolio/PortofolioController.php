<?php

namespace App\Http\Controllers\Creator\Portofolio;

use App\Http\Controllers\Controller;
use App\Http\Requests\Creator\Portofolio\PortofolioRequest;
use App\Models\ContentCreatorPortofolio;
use App\Services\CreatorService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PortofolioController extends Controller
{
    private $creatorService;

    public function __construct(CreatorService $creatorService)
    {
        $this->creatorService = $creatorService;
    }

    public function index(): View
    {
        $creatorId = $this->creatorService->getCreatorId(Auth::user()->id);
        $portofolios = ContentCreatorPortofolio::where('creator_id', $creatorId)->get();
        return view('creator.portofolio.index', compact('portofolios'));
    }

    public function create():View
    {
        return view('creator.portofolio.create');
    }

    public function store(PortofolioRequest $request): RedirectResponse
    {
        $data = $request->validated();
        if ($request->hasFile('photo')) {
            $data['photo'] =  $this->creatorService->getPath($request);
        }
        $data['creator_id'] = $this->creatorService->getCreatorId(Auth::user()->id);
        ContentCreatorPortofolio::create($data);
        return redirect()->route('portofolio.index')->with('success', 'Portofolio berhasil ditambahkan');
    }

    public function edit(ContentCreatorPortofolio $portofolio): View
    {
        return view('creator.portofolio.edit', compact('portofolio'));
    }

    public function update(PortofolioRequest $request, ContentCreatorPortofolio $portofolio): RedirectResponse
    {
        $data = $request->validated();
        if ($request->hasFile('photo')) {
            Storage::disk('public')->delete($portofolio->photo);
            $data['photo'] = $this->creatorService->getPath($request);
        }
        $portofolio->update($data);
        return redirect()->route('portofolio.index')->with('success', 'Portofolio berhasil diedit');
    }

    public function destroy(ContentCreatorPortofolio $portofolio)
    {
        Storage::disk('public')->delete($portofolio->photo);
        $portofolio->delete();
        return redirect()->route('portofolio.index')->with('success', 'Portofolio berhasil dihapus');
    }
}
