<?php

namespace App\Http\Controllers\Creator;

use App\Http\Controllers\Controller;
use App\Http\Requests\PortoRequest;
use App\Models\ContentCreator;
use App\Models\ContentCreatorPortofolio;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PortofolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $portofolios = ContentCreator::getUser(Auth::user()->id)->portofolio()->get();

        return view('edukasi.portofolio.index', [
            'portofolios' => $portofolios,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('edukasi.portofolio.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PortoRequest $request)
    {
        $validatedData = $request->validated();
        if ($request->file('photo')) {
            $filename = basename($request->file('photo')->getClientOriginalName(), '.' . $request->file('photo')->getClientOriginalExtension());
            $path = $request->file('photo')->storeAs('/assets/images', $filename . "-" . Auth::user()->email . "." . $request->file('photo')->getClientOriginalExtension(), 'public');

            $validatedData['photo'] = $path;
        }

        $creator = User::getCreatorId(Auth::user()->id);
        $validatedData['creator_id'] = $creator->id;

        ContentCreatorPortofolio::create($validatedData);

        return redirect()->route('portofolio.index')->with('success', 'Portofolio berhasil ditambahkan');
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
    public function edit(string $id): View
    {
        return view('edukasi.portofolio.edit', [
            'portofolio' => ContentCreatorPortofolio::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PortoRequest $request, string $id)
    {
        $validatedData = $request->validated();
        if ($request->file('photo')) {
            $filename = basename($request->file('photo')->getClientOriginalName(), '.' . $request->file('photo')->getClientOriginalExtension());
            $path = $request->file('photo')->storeAs('/assets/images', $filename . "-" . Auth::user()->email . "." . $request->file('photo')->getClientOriginalExtension(), 'public');
            if (!is_null($request->user()->photo)) {
                Storage::disk('public')->delete($request->user()->photo);
            }
            $validatedData['photo'] = $path;
        }

        ContentCreatorPortofolio::where('id', $id)->update($validatedData);

        return redirect()->route('portofolio.index')->with('success', 'Portofolio berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ContentCreatorPortofolio::destroy($id);

        return redirect()->route('portofolio.index')->with('success', 'Portofolio berhasil dihapus');
    }
}
