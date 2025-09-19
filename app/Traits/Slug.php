<?php
namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DNS2D;

trait Slug {

    protected static function bootSlug()
    {
        static::creating(function ($model) {
            $model->slug = Str::slug($model->title);
        });
    }
}