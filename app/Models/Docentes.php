<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Docentes extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'docentes';
    protected $primaryKey = '_id';
}
