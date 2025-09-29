<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ServiceCardDetail;

class ServiceHeading extends Model
{
    public function cardContent()
    {
        return $this->hasMany(ServiceCardDetail::class, 'serviceheading_id');
    }
}
