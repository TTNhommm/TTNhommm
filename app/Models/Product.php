<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded =[''];
    public function getCategory()
    {
        $cate = Category::find($this->pro_cate_id);
        return $cate->name;
    }
}