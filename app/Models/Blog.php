<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $guarded =[

    ];
    public function category(){
        return $this->belongsTo(BlogCategory::class,'blog_category_id','id');
    }
}
