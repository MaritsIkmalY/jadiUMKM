<?php

namespace App\Http\Controllers\Creator\Kategori;

use App\Http\Controllers\Controller;
use App\Http\Requests\Creator\Kategori\KategoriRequest;
use App\Models\ContentCreatorCategory;
use App\Models\HasCategory;

class CategoryController extends Controller
{
    public function index()
    {
        $kategori = HasCategory::getCreatorCategory();
        $categories = ContentCreatorCategory::all();
        return view('creator.kategori.index', compact('kategori', 'categories'));
    }

    public function store(KategoriRequest $request)
    {
        $data = $request->validated();
        HasCategory::newCreatorCategory($data);

        return redirect()->route('kategori')->with('success', 'Kategori berhasil ditambahkan');
    }

    public function edit(string $id)
    {
        $kategori = HasCategory::getCreatorCategoryById($id);
        $categories = ContentCreatorCategory::all();
        return view('creator.kategori.edit', compact('kategori', 'categories'));
    }

    public function update(KategoriRequest $request, string $id)
    {
        $data = $request->validated();
        $kategori = HasCategory::getCreatorCategoryById($id);
        if ($kategori) {
            $kategori->update($data);
        }
        return redirect()->route('kategori')->with('success', 'Kategori berhasil diperbarui');
    }

    public function destroy(string $id)
    {
        $kategori = HasCategory::getCreatorCategoryById($id);
        $kategori->delete();

        return redirect()->route('kategori')->with('success', 'Kategori berhasil dihapus');
    }
}
