<?php

namespace App\Http\Controllers;

use App\Models\ContentCreator;
use App\Models\ContentCreatorCategory;
use App\Models\HasCategory;
use App\Services\FilterService;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    private $filterService;

    public function __construct(FilterService $filterService)
    {
        $this->filterService = $filterService;
    }

    public function getCreatorByFilter(Request $request)
    {
        $categories = ContentCreatorCategory::all();
        if ($request->id == 0) {
            $creators = ContentCreator::all();
            return view('creator', compact('creators', 'categories'));
        }
        $creators = $this->filterService->getContentCreatorByCategory($request->id);
        return view('creator', compact('creators', 'categories'));
    }
}
