<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;

class Category extends Model
{
    //
public function Category()
{
    return $this->hasMany('APP\Post');
}
public function getByCategory(int $limit_count = 5)
{
    return $this->posts()->with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}





