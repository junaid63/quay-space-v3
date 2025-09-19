<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SpaceAmenity extends Model
{
    protected $fillable = ['space_id', 'amenity_id', 'created_at', 'updated_at'];
}
