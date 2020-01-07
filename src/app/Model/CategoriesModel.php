<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CategoriesModel extends Model
{
    protected $table = 'smell_categories';
    protected $connection = 'mysql';

    public $timestamps = true;
}
