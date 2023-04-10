<?php

namespace App\Http\Controllers\Creator\Kategori;

use App\Http\Controllers\Controller;
use App\Http\Requests\Creator\Kategori\KategoriRequest;
use App\Models\ContentCreatorCategory;
use App\Models\HasCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = HasCategory::getCreatorCategory();
        $categories = ContentCreatorCategory::getAllCategory();
        return view('creator.kategori.index', compact('kategori', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KategoriRequest $request)
    {
        $data = $request->validated();
        HasCategory::newCreatorCategory($data);

        return redirect()->route('kategori')->with('success', 'Kategori berhasil ditambahkan');
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
        $kategori = HasCategory::getCreatorCategoryById($id);
        $categories = ContentCreatorCategory::getAllCategory();
        return view('creator.kategori.edit', compact('kategori', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KategoriRequest $request, string $id)
    {
        $data = $request->validated();
        $kategori = HasCategory::getCreatorCategoryById($id);
        if ($kategori) {
            $kategori->update($data);
        }
        return redirect()->route('kategori')->with('success', 'Kategori berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori = HasCategory::getCreatorCategoryById($id);
        $kategori->delete();

        return redirect()->route('kategori')->with('success', 'Kategori berhasil dihapus');
    }
}
