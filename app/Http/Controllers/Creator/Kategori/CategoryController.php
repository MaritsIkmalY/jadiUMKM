<?php

namespace App\Http\Controllers\Creator\Kategori;

use App\Http\Controllers\Controller;
use App\Http\Requests\Creator\Kategori\KategoriRequest;
use App\Models\ContentCreatorCategory;
use App\Models\HasCategory;
use App\Services\CreatorService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    private $creatorService;

    public function __construct(CreatorService $creatorService)
    {
        $this->creatorService = $creatorService;
    }

    public function index(): View
    {
        $creatorId = $this->creatorService->getCreatorId(Auth::user()->id);
        $kategori = HasCategory::where('creator_id', $creatorId)->get();
        $categories = ContentCreatorCategory::all();
        return view('creator.kategori.index', compact('kategori', 'categories'));
    }

    public function store(KategoriRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $data['creator_id'] = $this->creatorService->getCreatorId(Auth::user()->id);
        HasCategory::create($data);
        return redirect()->route('category.index')->with('success', 'Kategori berhasil ditambahkan');
    }

    public function edit(string $id): View
    {
        $kategori = HasCategory::find($id);
        $categories = ContentCreatorCategory::all();
        return view('creator.kategori.edit', compact('kategori', 'categories'));
    }

    public function update(KategoriRequest $request, string $id): RedirectResponse
    {
        $kategori = HasCategory::find($id);
        $kategori->update($request->validated());
        return redirect()->route('category.index')->with('success', 'Kategori berhasil diperbarui');
    }

    public function destroy(string $id): RedirectResponse
    {
        $kategori = HasCategory::find($id);
        $kategori->delete();
        return redirect()->route('category.index')->with('success', 'Kategori berhasil dihapus');
    }
}
