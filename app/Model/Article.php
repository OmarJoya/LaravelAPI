<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product;

class Article extends Model
{
	protected $fillable =[
		'name','description','price'
	];

 	public function article()
 	{
 		return $this->belongsTo(Product::class);
 	}
}
