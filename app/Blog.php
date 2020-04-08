<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
	protected $table = 'blog';
	protected $fillable = array('title', 'subtitle','slug','image','imagemedium','imagethumb','description','region_id','country_id','user_id','creator','lat','lng','workflow_id');

	public function createdby()
	{
		return $this->belongsTo('App\User', 'creator','id');
	}

	public function user()
	{
		return $this->belongsTo('App\User', 'user_id', 'id');
	}

	public function workflow()
	{
		return $this->belongsTo('App\Workflow','workflow_id','id');
	}




}
