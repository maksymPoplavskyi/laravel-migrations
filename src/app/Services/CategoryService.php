<?php


namespace App\Services;


use App\Model\CategoriesModel;

class CategoryService
{
    public function saveCategory($request): bool
    {
        $category = new CategoriesModel();
        $category->name = $request['name'];

        $category->save();

        return true;
    }

}
