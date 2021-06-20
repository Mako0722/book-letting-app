<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $table = 'comics';
    protected $guarded = array('id');

    public function magazine() {
        return $this->belongsTo('App\Magazine');
    }  
    public function author() {
        return $this->belongsTo('App\Author');
    }  
}
