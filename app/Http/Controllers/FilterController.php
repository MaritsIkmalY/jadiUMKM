<?php

namespace App\Http\Controllers;

use App\Models\ContentCreator;
use App\Models\ContentCreatorCategory;
use App\Models\HasCategory;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function getCreatorByFilter(Request $request)
    {
        $categories = ContentCreatorCategory::all();
        if ($request->id == 0) {
            $creators = ContentCreator::all();
            return view('creator', compact('creators', 'categories'));
        } else {
            $creators = ContentCreator::getContentCreatorByCategory($request->id);
            return view('creator', compact('creators', 'categories'));
        }
    }
}
