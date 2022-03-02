<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model

{
    use SoftDeletes;
    
    protected $fillable =[
    'title',
    'body',
    'category_id'
    ];
    
    public function getPaginateBylimit(int $limit_count = 10)
    {
         return $this::with('category') ->orderBy("updated_at", 'DESC')->paginate($limit_count);
    }
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    
    
}
