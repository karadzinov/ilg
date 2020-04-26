<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'team';

    protected $fillable = ['name', 'image', 'imagemedium', 'imagethumb', 'title', 'facebook', 'linkedin', 'instagram', 'bio', 'user_id', 'workflow_id', 'slug', 'slug_name'];

    public function user() {
        return $this->belongsTo('App\User' , 'user_id');
    }

    public function workflow() {
        return $this->belongsTo('App\Workflow' , 'user_id');
    }

    public function CreatedBy() {
        return $this->belongsTo('App\User' , 'user_id');
    }

}
