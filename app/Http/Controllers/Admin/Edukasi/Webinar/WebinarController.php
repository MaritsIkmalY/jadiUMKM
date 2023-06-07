<?php

namespace App\Http\Controllers\Admin\Edukasi\Webinar;

use App\Http\Controllers\Controller;
use App\Http\Requests\Edukasi\Webinar\WebinarRequest;
use App\Models\Webinar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WebinarController extends Controller
{

    public function index()
    {
        $webinar = Webinar::getWebinar();
        return view('admin.webinar.index', compact('webinar'));
    }

    public function create()
    {
        return view('admin.webinar.create');
    }

    public function store(WebinarRequest $request)
    {
        $filename = $request->file('photo')->getClientOriginalName();
        $path  = $request->file('photo')->storeAs('/assets/images', $filename, 'public');
        $data = $request->validated();
        Webinar::newWebinar($data, $path);

        return redirect()->route('webinar.index')->with('success', 'Webinar berhasil ditambahkan');
    }

    public function show(Webinar $webinar)
    {
        //
    }

    public function edit(Webinar $webinar)
    {
        return view('admin.webinar.edit', compact('webinar'));
    }

    public function update(WebinarRequest $request, Webinar $webinar)
    {
        $data = $request->validated();
        if (!is_null($request->file('photo'))) {
            $filename = $request->file('photo')->getClientOriginalName();
            $path  = $request->file('photo')->storeAs('/assets/images', $filename, 'public');
            Storage::disk('public')->delete($webinar->photo);
            $data['photo'] = $path;
        }
        $webinar->update($data);

        return redirect()->route('webinar.index')->with('success', 'Webinar berhasil diperbarui');
    }

    public function destroy(Webinar $webinar)
    {
        Storage::disk('public')->delete($webinar->photo);
        $webinar->delete();

        return redirect()->route('webinar.index')->with('success', 'Webinar berhasil dihapus');
    }
}
