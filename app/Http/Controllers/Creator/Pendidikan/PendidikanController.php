<?php

namespace App\Http\Controllers\Creator\Pendidikan;

use App\Http\Controllers\Controller;
use App\Http\Requests\Creator\Pendidikan\PendidikanRequest;
use App\Models\ContentCreatorEducation;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendidikan = ContentCreatorEducation::getAllEducation();
        return view('creator.pendidikan.index', compact('pendidikan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('creator.pendidikan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PendidikanRequest $request)
    {
        $data = $request->validated();
        ContentCreatorEducation::newEducation($data);

        return redirect()->route('pendidikan')->with('success', 'Pendidikan berhasil ditambahkan');
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
        $pendidikan = ContentCreatorEducation::getEducationById($id);
        return view('creator.pendidikan.edit', compact('pendidikan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PendidikanRequest $request, string $id)
    {
        $data = $request->validated();
        $pendidikan = ContentCreatorEducation::geteducationById($id);
        if ($pendidikan) {
            $pendidikan->update($data);
        }
        return redirect()->route('pendidikan')->with('success', 'Pendidikan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pendidikan = ContentCreatorEducation::getEducationById($id);
        $pendidikan->delete();
        return redirect()->route('pendidikan')->with('success', 'Pendidikan berhasil dihapus');
    }
}
