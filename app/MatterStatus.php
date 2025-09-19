<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class MatterStatus extends Model
{
    use LogsActivity , SoftDeletes;
    protected static $logName = 'matter_status';
    protected $fillable = ['title' , 'class' ,  'status'];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logAll()->useLogName('matter_status'); 
    }

    public static function get()
    {
        return self::all();
    }

    public static function withstatusget()
    {
        return self::where('status' , 1)->get();
    }

    public static function fetchForApi()
    {
        return self::select('id', 'title', 'class' , 'status', 'created_at')
            ->orderByDesc('id')
            ->get()
            ->map(function ($matterstatus) {
                $statusToggle = ($matterstatus->status == 1)
                    ? '<label class="switch switch-success">
                            <input type="checkbox" class="switch-input status-toggle" data-id="' . $matterstatus->id . '" checked>
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
                            <input type="checkbox" class="switch-input status-toggle" data-id="' . $matterstatus->id . '">
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
                        <button type="button"  data-id="' . $matterstatus->id . '" class="btn rounded-pill btn-outline-warning waves-effect edit-btn"><i class="icon-base ti tabler-edit icon-22px"></i></button>
                        <button type="button"  data-id="' . $matterstatus->id . '" class="btn rounded-pill btn-outline-danger waves-effect delete-btn"><i class="icon-base ti tabler-trash icon-22px"></i></button>
                    </div>';

                return [
                    'id' => $matterstatus->id,
                    'title' => $matterstatus->title,
                    'class' => $matterstatus->class,
                    'status' => $statusToggle,
                    'created_at' => $matterstatus->created_at->format('d-m-Y H:i'),
                    'action' => $actions,
                ];
            });
    }
}
