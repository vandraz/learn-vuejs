<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{

    protected $guarded = [];

    public function subject() {
        return $this->belongsTo('App/Models/Subject');
    }
}
