<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ServiceHeading;

class Service extends Model
{
    public function headings()
    {
        return $this->hasMany(ServiceHeading::class, 'service_id');
    }
}
