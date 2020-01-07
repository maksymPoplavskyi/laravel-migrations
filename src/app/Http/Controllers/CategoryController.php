<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryPost;
use App\Model\CategoriesModel;
use App\Services\CategoryService;

class CategoryController extends Controller
{
    public function indexAction()
    {
        $categories = CategoriesModel::all();

        return view('categories', ['categories' => $categories]);
    }

    public function routeIndex()
    {
        return view('categoryAdd');
    }

    public function saveAction(StoreCategoryPost $request, CategoryService $service)
    {
        $result = $service->saveCategory($request);

        if ($result === true) {
            return view('categoryAdd');
        }
    }
}
