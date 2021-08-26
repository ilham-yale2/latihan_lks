<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function Items() {
        return $this->hasMany('App\item','id_category','id');
    }
}
