<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table="items";
    protected $primaryKey="item_id";
    protected $fillable=['name','description','stock','price','image'];

    public function categories() {
        return $this->belongsTo('App\category','id_category','id');
    }
}
