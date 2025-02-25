<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table ="categories";
    public $timestamps = false;

    public function products(){
        return $this->hasMany(ProductList::class, 'category_id');
    }
}
