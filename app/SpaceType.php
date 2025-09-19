<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
use App\Traits\Slug;

class SpaceType extends Model
{
    use LogsActivity , SoftDeletes, Slug;
    protected static $logName = 'spacetype';
    protected $fillable = ['name' , 'slug' , 'description' , 'status'];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logAll()->useLogName('spacetype');
    }

    public static function withstatusget()
    {
        return self::where('status' , 1)->get();
    }


    public static function fetchForApi()
    {
        return self::select('id', 'name', 'description' , 'status', 'created_at')
            ->orderByDesc('id')
            ->get()
            ->map(function ($spaceTypes) {
                $statusToggle = ($spaceTypes->status == 1)
                    ? '<label class="switch switch-success">
                            <input type="checkbox" class="switch-input status-toggle" data-id="' . $spaceTypes->id . '" checked>
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
                            <input type="checkbox" class="switch-input status-toggle" data-id="' . $spaceTypes->id . '">
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
                        <button type="button"  data-id="' . $spaceTypes->id . '" class="btn rounded-pill btn-outline-warning waves-effect edit-btn"><i class="icon-base ti tabler-edit icon-22px"></i></button>
                        <button type="button"  data-id="' . $spaceTypes->id . '" class="btn rounded-pill btn-outline-danger waves-effect delete-btn"><i class="icon-base ti tabler-trash icon-22px"></i></button>
                    </div>';

                return [
                    'id' => $spaceTypes->id,
                    'name' => $spaceTypes->name,
                    'description' => $spaceTypes->description,
                    'status' => $statusToggle,
                    'created_at' => $spaceTypes->created_at->format('d-m-Y H:i'),
                    'action' => $actions,
                ];
            });
    }
}
