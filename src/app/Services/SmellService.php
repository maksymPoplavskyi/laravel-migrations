<?php

namespace App\Services;

use App\Model\SmellsModel;

class SmellService
{
    public function getSmells()
    {
        return $unitedSmellsWithCategories = SmellsModel::query()
            ->leftJoin('smell_categories', 'smells.category_id', '=', 'smell_categories.id')
            ->select('smells.*', 'smell_categories.name as category_name')
            ->get();
    }

    public function SaveSmells($request): bool
    {
        $small_file = $request->file('small_icon')->getClientOriginalName();
        $small_file_path = $request->small_icon->storeAs('public/images', $small_file);

        $big_file = $request->file('big_icon')->getClientOriginalName();
        $big_file_path = $request->big_icon->storeAs('public/images', $big_file);

        $smells = new SmellsModel();
        $smells->category_id = $request['category'];
        $smells->name = $request['name'];
        $smells->slug = $request['slug'];
        $smells->description = $request['description'];
        $smells->big_icon = $big_file_path;
        $smells->small_icon = $small_file_path;

        $smells->save();

        return true;
    }
}
