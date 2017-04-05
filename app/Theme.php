<?php

namespace App;

use App\BaseModel;
use Illuminate\Support\Str;

class Theme extends BaseModel
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    public function Interview() {
        return $this->hasMany(Interview::class);
    }

    public function Article() {
        return $this->hasMany(Article::class);
    }
    
}