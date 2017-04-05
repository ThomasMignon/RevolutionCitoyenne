<?php

namespace App;

use App\BaseModel;
use Illuminate\Support\Str;

class Article extends BaseModel
{
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    public function Themes() {
        return $this->hasOne(Themes::class);
    }
    
}