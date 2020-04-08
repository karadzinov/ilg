<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sourcepartner extends Model
{
	protected $table = 'sourcepartners';
	protected $fillable =  ['name', 'image', 'imagethumb','webpage', 'description','country_id','our_partner','status','created_at', 'updated_at'];
}

