<?php

namespace App\Http\Controllers\Creator;

use App\Http\Controllers\Controller;
use App\Models\ContentCreator;
use App\Models\ContentCreatorSkill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = ContentCreator::getUser(Auth::user()->id)->skill()->get();
        return view('creator.skill.index', [
            'skills' => $skills
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255'
        ]);

        $data['creator_id'] = ContentCreator::getUser(Auth::user()->id)->id;

        ContentCreatorSkill::create($data);

        return redirect()->route('skill.index')->with('success', 'skill berhasil ditambahkan');
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
        return view('creator.skill.edit', [
            'skill' => ContentCreatorSkill::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required|max:255'
        ]);

        ContentCreatorSkill::where('id', $id)->update($data);
        return redirect()->route('skill.index')->with('success', 'skill berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ContentCreatorSkill::destroy($id);

        return redirect()->route('skill.index')->with('success', 'skill berhasil dihapus');
    }
}
