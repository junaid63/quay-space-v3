<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Slug;

class ServiceCardDetail extends Model
{
    use Slug;
    public function cardPoints()
    {
        return $this->hasMany(ServiceCardPoint::class, 'service_card_detail_id');
    }
}
