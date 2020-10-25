<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    protected $fillable = ['title', 'slug', 'text', 'photo_adress', 'published', 'created_by', 'modified_by'];

    public function setSlugAttribute($value){
        $this->attributes['slug'] = Str::slug( rand(1, 15) . "-" .
            \Carbon\Carbon::now()->format('dmy'), '-' );
    }
}


