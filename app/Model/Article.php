<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product;

class Article extends Model
{
 	public function article()
 	{
 		return $this->belongsTo(Product::class);
 	}
}
