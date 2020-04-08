<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sliders extends Model
{
    protected $table = 'sliders';
    protected $fillable = ['title', 'link', 'image', 'imagemedium', 'imagethumb', 'description', 'user_id', 'product_id', 'category_id', 'workflow_id', 'created_at', 'updated_at'];


    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }

    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id');
    }
}