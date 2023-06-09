<?php

namespace App\Services;

use App\Models\ContentCreator;
use App\Models\HasCategory;

class FilterService
{
    public function getContentCreatorByCategory(string $id)
    {
        $datas = [];
        $categoryId = HasCategory::where('category_id', $id)->get();
        foreach ($categoryId as $category) {
            $data = ContentCreator::where('id', $category->creator_id)->first();
            $datas[] = $data;
        }
        return $datas;
    }
}

