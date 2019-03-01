<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
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
    	'name','slug','description','image','featured_price','discount' ];

	public function category() {
		return $this->belongsTo(Category::class);
	}
    public function brand(){
        return $this->hasMany(Product::class);
    }
}
