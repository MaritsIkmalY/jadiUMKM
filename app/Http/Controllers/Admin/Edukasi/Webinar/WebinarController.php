<?php

namespace App\Http\Controllers\Admin\Edukasi\Webinar;

use App\Http\Controllers\Controller;
use App\Http\Requests\Edukasi\Webinar\WebinarRequest;
use App\Models\Webinar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WebinarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $webinar = Webinar::getWebinar();
        return view('edukasi.webinar.index', compact('webinar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('edukasi.webinar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WebinarRequest $request)
    {
        $filename = $request->file('photo')->getClientOriginalName();
        $path  = $request->file('photo')->storeAs('/assets/images', $filename, 'public');
        $data = $request->validated();
        Webinar::newWebinar($data, $path);

        return redirect()->route('webinar.index')->with('success', 'Webinar berhasil ditambahkan');
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
        $webinar = Webinar::getWebinarById($id);
        return view('edukasi.webinar.edit', compact('webinar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(WebinarRequest $request, string $id)
    {
        $webinar = Webinar::getWebinarById($id);
        $data = $request->validated();
        if (!is_null($request->file('photo'))) {
            $filename = $request->file('photo')->getClientOriginalName();
            $path  = $request->file('photo')->storeAs('/assets/images', $filename, 'public');
            Storage::disk('public')->delete($webinar->photo);
            $data['photo'] = $path;
        }
        if ($webinar) {
            $webinar->update($data);
        }
        return redirect()->route('webinar.index')->with('success', 'Webinar berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $webinar = Webinar::getWebinarById($id);
        Storage::disk('public')->delete($webinar->photo);
        $webinar->delete();

        return redirect()->route('webinar.index')->with('success', 'Webinar berhasil dihapus');
    }
}
