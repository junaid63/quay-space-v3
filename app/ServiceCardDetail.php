<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\Slug;
use App\ServiceHeading;
use App\ServiceCardPoint;

class ServiceCardDetail extends Model
{
    public $additional_attributes = ['title_with_headings'];
    use Slug;

    public function getTitleWithHeadingsAttribute()
    {
        return $this->title . ' - ' . $this->heading->heading;
    }
    public function cardPoints()
    {
        return $this->hasMany(ServiceCardPoint::class, 'service_card_detail_id');
    }

    public function heading()
    {
        return $this->belongsTo(ServiceHeading::class, 'serviceheading_id');
    }

    public function getFullTitleAttribute()
    {
        return $this->heading->heading . ' → ' . $this->title;
    }
}
