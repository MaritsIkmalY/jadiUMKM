<?php

namespace App\Http\Controllers\Creator\Pendidikan;

use App\Http\Controllers\Controller;
use App\Http\Requests\Creator\Pendidikan\PendidikanRequest;
use App\Models\ContentCreatorEducation;
use App\Services\CreatorService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class PendidikanController extends Controller
{
    private $creatorService;

    public function __construct(CreatorService $creatorService)
    {
        $this->creatorService = $creatorService;
    }

    public function index(): View
    {
        $creatorId = $this->creatorService->getCreatorId(Auth::user()->id);
        $pendidikan = ContentCreatorEducation::where('creator_id', $creatorId)->get();
        return view('creator.pendidikan.index', compact('pendidikan'));
    }

    public function create(): View
    {
        return view('creator.pendidikan.create');
    }

    public function store(PendidikanRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $data['creator_id'] = $this->creatorService->getCreatorId(Auth::user()->id);
        ContentCreatorEducation::create($data);
        return redirect()->route('pendidikan.index')->with('success', 'Pendidikan berhasil ditambahkan');
    }

    public function edit(ContentCreatorEducation $pendidikan): View
    {
        return view('creator.pendidikan.edit', compact('pendidikan'));
    }

    public function update(PendidikanRequest $request, ContentCreatorEducation $pendidikan): RedirectResponse
    {
        $pendidikan->update($request->validated());
        return redirect()->route('pendidikan.index')->with('success', 'Pendidikan berhasil diperbarui');
    }

    public function destroy(ContentCreatorEducation $pendidikan): RedirectResponse
    {
        $pendidikan->delete();
        return redirect()->route('pendidikan.index')->with('success', 'Pendidikan berhasil dihapus');
    }
}
