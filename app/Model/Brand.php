<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class Brand extends Model
{
	use Sluggable;
	public function sluggable() {
		return [
			'slug'=>[
				'source'=>'name'
			]
		];
	}

    protected $fillable=[
    	'name'];
    public function products(){
        return $this->hasMany(Product::class);
    }	

}
