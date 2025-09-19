<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Funding extends Model
{
    use LogsActivity , SoftDeletes;
    protected static $logName = 'funding';

    protected $fillable = ['title' , 'status'];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logAll()->useLogName('funding'); 
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
        return self::select('id', 'title', 'status', 'created_at')
            ->orderByDesc('id')
            ->get()
            ->map(function ($funding) {
                $statusToggle = ($funding->status == 1)
                    ? '<label class="switch switch-success">
                            <input type="checkbox" class="switch-input status-toggle" data-id="' . $funding->id . '" checked>
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
                            <input type="checkbox" class="switch-input status-toggle" data-id="' . $funding->id . '">
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
                        <button type="button"  data-id="' . $funding->id . '" class="btn rounded-pill btn-outline-warning waves-effect edit-btn"><i class="icon-base ti tabler-edit icon-22px"></i></button>
                        <button type="button"  data-id="' . $funding->id . '" class="btn rounded-pill btn-outline-danger waves-effect delete-btn"><i class="icon-base ti tabler-trash icon-22px"></i></button>
                    </div>';

                return [
                    'id' => $funding->id,
                    'title' => $funding->title,
                    'status' => $statusToggle,
                    'created_at' => $funding->created_at->format('d-m-Y H:i'),
                    'action' => $actions,
                ];
            });
    }
}
