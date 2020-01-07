<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SmellsModel extends Model
{
    protected $table = 'smells';
    protected $connection = 'mysql';

    public $timestamps = true;
}
