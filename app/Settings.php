<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settings extends Model
{

    protected $table = 'settigs';
    protected $fillable = ['title', 'mainurl', 'email','link','address',
        'logo', 'logomedium', 'logothumb', 'description', 'user_id', 'workflow_id', 'created_at', 'updated_at',
        'phone','twitter','facebook','linkedin','gplus','youtube','flickr','pinterest','lat','lng'
    ];


    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function createdby()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function workflow()
    {
        return $this->belongsTo('App\Workflow', 'user_id');
    }
}
