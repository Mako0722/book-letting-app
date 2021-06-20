<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Magazine extends Model
{
    protected $table = 'magazines';
    protected $guarded = array('id');
}
