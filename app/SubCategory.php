<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
class SubCategory extends Model
{
    use Translatable;
    protected $translatable = ['title','description'];
    protected $fillable = ['categories_id','title','image','description'];
    

    public function categories () {
        return $this->belongsTo('App\categories');
    }
}
