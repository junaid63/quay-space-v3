<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
use App\SpaceType;
use App\Floor;
use App\Amenity;
use App\SpaceAmenity;

class Space extends Model
{
    use LogsActivity , SoftDeletes;
    protected static $logName = 'space';
    protected $fillable = ['name' , 'floor_id' , 'space_type_id' , 'capacity', 'price_per_day', 'status', 'description', 'created_at'];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logAll()->useLogName('space');
    }

    public static function withstatusget()
    {
        return self::where('status' , 1)->get();
    }
    
    public function space_type()
    {
        return $this->belongsTo(SpaceType::class, 'space_type_id');
    }
    public function floor_details()
    {
        return $this->belongsTo(Floor::class, 'floor_id');
    }
    public function amenities_details()
    {
        return $this->belongsTo(Amenity::class);
    }

    public function amenities()
    {
        return $this->belongsToMany(SpaceAmenity::class, 'space_id', 'amenity_id', 'created_at', 'updated_at');
    }


    // public static function fetchForApi()
    // {
    //     return self::select('id', 'name' , 'floor_id' , 'space_type_id' , 'capacity', 'price_per_day', 'status', 'description', 'created_at')
    //         ->orderByDesc('id')
    //         ->get()
    //         ->map(function ($space) {
    //             $statusToggle = ($space->status == 1)
    //                 ? '<label class="switch switch-success">
    //                         <input type="checkbox" class="switch-input status-toggle" data-id="' . $space->id . '" checked>
    //                         <span class="switch-toggle-slider">
    //                             <span class="switch-on">
    //                                 <i class="icon-base ti tabler-check"></i>
    //                             </span>
    //                             <span class="switch-off">
    //                                 <i class="icon-base ti tabler-x"></i>
    //                             </span>
    //                         </span>
    //                 </label>'
    //                 : '<label class="switch switch-danger">
    //                         <input type="checkbox" class="switch-input status-toggle" data-id="' . $space->id . '">
    //                         <span class="switch-toggle-slider">
    //                             <span class="switch-on">
    //                                 <i class="icon-base ti tabler-check"></i>
    //                             </span>
    //                             <span class="switch-off">
    //                                 <i class="icon-base ti tabler-x"></i>
    //                             </span>
    //                         </span>
    //                 </label>';

    //             $actions = '
    //                 <div class="d-flex gap-2">
    //                     <button type="button"  data-id="' . $space->id . '" class="btn rounded-pill btn-outline-warning waves-effect edit-btn"><i class="icon-base ti tabler-edit icon-22px"></i></button>
    //                     <button type="button"  data-id="' . $space->id . '" class="btn rounded-pill btn-outline-danger waves-effect delete-btn"><i class="icon-base ti tabler-trash icon-22px"></i></button>
    //                 </div>';

    //             return [
    //                 'id' => $space->id,
    //                 'name' => $space->name,
    //                 'capacity' => $space->capacity,
    //                 'status' => $space->status,
    //                 'description' => $space->description,
    //                 'status' => $statusToggle,
    //                 'space_type' => $space->space_type ? $space->space_type->name : 'N/A',
    //                 'floor_details' => $space->floor_details ? $space->floor_details->name : 'N/A',
    //                 'created_at' => $space->created_at->format('d-m-Y H:i'),
    //                 'action' => $actions,
    //             ];
    //         });
    // }
    public static function fetchForApi()
    {
        return self::select('id', 'name', 'floor_id', 'space_type_id', 'capacity', 'price_per_day', 'status', 'created_at')
            ->orderByDesc('id')
            ->get()
            ->map(function ($space) {
                $statusToggle = ($space->status == 1)                                                                                                                                                                                                                                                             
                    ? '<label class="switch switch-success">
                            <input type="checkbox" class="switch-input status-toggle" data-id="' . $space->id . '" checked>
                            <span class="switch-toggle-slider">
                                <span class="switch-on">
                                    <i class="icon-base ti tabler-check"></i>
                                </span>
                                <span class="switch-off">
                                    <i class="icon-base ti tabler-x"></i>
                                </span>
                            </span>
                    </label>'
                    : '<label class="switch switch-danger">
                            <input type="checkbox" class="switch-input status-toggle" data-id="' . $space->id . '">
                            <span class="switch-toggle-slider">
                                <span class="switch-on">
                                    <i class="icon-base ti tabler-check"></i>
                                </span>
                                <span class="switch-off">
                                    <i class="icon-base ti tabler-x"></i>
                                </span>
                            </span>
                    </label>';

                $actions = '
                    <div class="d-flex gap-2">
                        <button type="button"  data-id="' . $space->id . '" class="btn rounded-pill btn-outline-warning waves-effect edit-btn">
                            <i class="icon-base ti tabler-edit icon-22px"></i>
                        </button>
                        <button type="button"  data-id="' . $space->id . '" class="btn rounded-pill btn-outline-danger waves-effect delete-btn">
                            <i class="icon-base ti tabler-trash icon-22px"></i>
                        </button>
                    </div>';

                return [
                    'id' => $space->id,
                    'name' => $space->name,
                    'capacity' => $space->capacity,
                    'priceperday' => $space->price_per_day,
                    'status' => $statusToggle,
                    'space_type' => $space->space_type ? $space->space_type->name: '' ,
                    'floor_details' => $space->floor_details ? $space->floor_details->name : '',
                    'created_at' => $space->created_at ? $space->created_at->format('d-m-Y H:i') : '',
                    'action' => $actions,
                ];
            });
    }

}
