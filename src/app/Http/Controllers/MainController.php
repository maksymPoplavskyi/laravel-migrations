<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSmellPost;
use App\Model\CategoriesModel;
use App\Services\MainService;

class MainController extends Controller
{
    public function indexAction()
    {
        return view('main');
    }
}
