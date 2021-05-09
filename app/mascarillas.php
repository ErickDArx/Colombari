<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class mascarillas extends Model
{
    protected $table = 'mascarillas';
    protected $filliable = ['img'];

}
