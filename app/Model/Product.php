<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[
    	'name','slug','description','image','featured_price','discount' ];

	public function categories() {
		return $this->belongsToMany('App\Model\Category');
	}
}
