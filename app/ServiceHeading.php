<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ServiceCardDetail;
use App\Service;
class ServiceHeading extends Model
{
    public function cardContent()
    {
        return $this->hasMany(ServiceCardDetail::class, 'serviceheading_id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }
}
