<?php

namespace App;

use App\BaseModel;
use Illuminate\Support\Str;

class Image extends BaseModel
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    public function Article() {
        return $this->hasOne(Article::class);
    }
    
}