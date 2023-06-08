<?php

namespace App\Http\Controllers\Creator\Skill;

use App\Http\Controllers\Controller;
use App\Http\Requests\Creator\Skill\SkillRequest;
use App\Models\ContentCreatorSkill;
use App\Services\CreatorService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class SkillController extends Controller
{
    private $creatorService;

    public function __construct(CreatorService $creatorService)
    {
        $this->creatorService = $creatorService;
    }

    public function index(): View
    {
        $creatorId = $this->creatorService->getCreatorId(Auth::user()->id);
        $skills = ContentCreatorSkill::where('creator_id', $creatorId)->get();
        return view('creator.skill.index', compact('skills'));
    }

    public function store(SkillRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $data['creator_id'] = $this->creatorService->getCreatorId(Auth::user()->id);
        ContentCreatorSkill::create($data);
        return redirect()->route('skill.index')->with('success', 'skill berhasil ditambahkan');
    }

    public function edit(ContentCreatorSkill $skill): View
    {
        return view('creator.skill.edit', compact('skill'));
    }

    public function update(SkillRequest $request, ContentCreatorSkill $skill): RedirectResponse
    {
        $skill->update($request->validated());
        return redirect()->route('skill.index')->with('success', 'skill berhasil ditambahkan');
    }

    public function destroy(ContentCreatorSkill $skill): RedirectResponse
    {
        $skill->delete();
        return redirect()->route('skill.index')->with('success', 'skill berhasil dihapus');
    }
}
