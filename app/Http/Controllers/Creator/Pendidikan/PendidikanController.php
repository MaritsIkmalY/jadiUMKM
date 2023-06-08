<?php

namespace App\Http\Controllers\Creator\Pendidikan;

use App\Http\Controllers\Controller;
use App\Http\Requests\Creator\Pendidikan\PendidikanRequest;
use App\Models\ContentCreatorEducation;
use App\Services\CreatorService;
use Illuminate\Support\Facades\Auth;

class PendidikanController extends Controller
{
    private $creatorService;

    public function __construct(CreatorService $creatorService)
    {
        $this->creatorService = $creatorService;
    }

    public function index()
    {
        $creatorId = $this->creatorService->getCreatorId(Auth::user()->id);
        $pendidikan = ContentCreatorEducation::where('creator_id', $creatorId)->get();
        return view('creator.pendidikan.index', compact('pendidikan'));
    }

    public function create()
    {
        return view('creator.pendidikan.create');
    }

    public function store(PendidikanRequest $request)
    {
        $data = $request->validated();
        $data['creator_id'] = $this->creatorService->getCreatorId(Auth::user()->id);
        ContentCreatorEducation::create($data);
        return redirect()->route('pendidikan.index')->with('success', 'Pendidikan berhasil ditambahkan');
    }

    public function edit(ContentCreatorEducation $pendidikan)
    {
        return view('creator.pendidikan.edit', compact('pendidikan'));
    }

    public function update(PendidikanRequest $request, ContentCreatorEducation $pendidikan)
    {
        $pendidikan->update($request->validated());
        return redirect()->route('pendidikan.index')->with('success', 'Pendidikan berhasil diperbarui');
    }

    public function destroy(ContentCreatorEducation $pendidikan)
    {
        $pendidikan->delete();
        return redirect()->route('pendidikan.index')->with('success', 'Pendidikan berhasil dihapus');
    }
}
