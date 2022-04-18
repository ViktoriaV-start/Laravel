<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title',
    'text',
    'status',
    'isPrivate',
    'category_id',
    'image'];

//    public function category() {
//        return $this->belongsTo(Category::class, 'category_id')->first();
//    }
}
