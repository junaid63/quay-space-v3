<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Service;

class ServiceCardPoint extends Model
{

    public function cardDetail()
    {
        return $this->belongsTo(ServiceCardDetail::class, 'service_card_detail_id');
    }
    // public $additional_attributes = ['title_with_door'];

    // public function getTitleWithDoorAttribute()
    // {
    //     return $this->title . ' - ' . $this->door_detail->title;
    // }

    // public function door_detail(){
    //     return $this->belongsTo(Service::class , 'door_id');
    // }
    // public function doordetail_color(){
    //     return $this->hasMany(Service::class , "door_to_details_to_designs_id");
    // }
}
