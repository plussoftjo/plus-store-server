<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
class categories extends Model
{
    use Translatable;
    protected $translatable = ['title', 'description'];
    protected $fillable = ['title','description','icon','image'];
    public $with = ['SubCategory'];

    public function SubCategory() {
        return $this->hasMany('App\SubCategory');
    }

}
