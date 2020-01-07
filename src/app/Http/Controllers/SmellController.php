<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSmellPost;
use App\Model\CategoriesModel;
use App\Model\SmellsModel;
use App\Services\SmellService;
use http\Env\Request;

class SmellController extends Controller
{
    public function indexAction(SmellService $service)
    {
        $smells = $service->getSmells();

        return view('smells', ['smells' => $smells]);
    }

    public function routeIndex()
    {
        $categories = CategoriesModel::all();

        return view('smellAdd', ['categories' => $categories]);
    }

    public function saveAction(StoreSmellPost $request, SmellService $service)
    {
        $resultInfo = $service->SaveSmells($request);

        $categories = CategoriesModel::all();

        if ($resultInfo === true) {
            return view('smellAdd', ['categories' => $categories]);
        }
    }

    public function deleteAction($id)
    {
        $item = SmellsModel::find($id);
        $item->delete();

        return redirect()->route('smells');
    }
}
