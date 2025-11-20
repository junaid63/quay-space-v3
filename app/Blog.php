<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Slug;

class Blog extends Model
{
    use Slug;

    public static function get()
    {
        return self::all();
    }

    


}
