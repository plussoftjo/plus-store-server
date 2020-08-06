<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
class products extends Model
{
    use Translatable;
    public $with = ['Color','Size'];
    protected $translatable = ['title', 'description'];
    protected $fillable = [
        'categories_id',
        'sections_id',
        'title',
        'description',
        'amount',
        'image',
        'images',
        'rate',
        'rate_counter',
        'sub_category_id'
    ];

    public function Color() {
        return $this->belongsToMany('App\Color','product_colors');
    }
    public function Size() {
        return $this->belongsToMany('App\Size','product_sizes');
    }
}
