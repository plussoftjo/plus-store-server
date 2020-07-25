<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;
class products extends Model
{
    use Translatable;
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
}
