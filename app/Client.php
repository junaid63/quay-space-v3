<?php

namespace App;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Client extends Model
{
    use LogsActivity , SoftDeletes;
    protected static $logName = 'clients';
    protected $fillable = ['name' , 'email' , 'phone' , 'address' , 'company_id' , 'status'];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logAll()->useLogName('clients');
    }

    public static function get()
    {
        return self::all();
    }

    public static function withstatusget()
    {
        return self::where('status' , 1)->get();
    }

    public function company_detail(){
        return $this->belongsTo(Company::class , 'company_id');
    }

    public static function fetchForApi(Request $request)
    {
        $query = self::select('id', 'name', 'email', 'phone', 'address', 'company_id', 'status', 'created_at');

        if ($request->has('company') && $request->company) {
            $query->where('company_id', $request->company);
        }

        $clientData = $query->orderBy('id', 'desc')->get();

        return $clientData->map(function ($client) {
            $statusToggle = ($client->status == 1)
                ? '<label class="switch switch-success">
                        <input type="checkbox" class="switch-input status-toggle" data-id="' . $client->id . '" checked>
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
                        <input type="checkbox" class="switch-input status-toggle" data-id="' . $client->id . '">
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
                    <button type="button" data-id="' . $client->id . '" class="btn btn-outline-warning waves-effect edit-btn common-btn">
                        <i class="icon-base ti tabler-edit icon-16px"></i>
                    </button>
                    <button type="button" data-id="' . $client->id . '" class="btn btn-outline-danger waves-effect delete-btn common-btn">
                        <i class="icon-base ti tabler-trash icon-16px"></i>
                    </button>
                </div>';

            return [
                'id' => $client->id,
                'name' => $client->name,
                'email' => $client->email,
                'phone' => $client->phone,
                'address' => $client->address,
                'company_id' => $client->company_detail ? '<span class="badge bg-label-success">' . $client->company_detail->name . '</span>' : '',
                'status' => $statusToggle,
                'created_at' => $client->created_at ? $client->created_at->format('d-m-Y H:i') : 'Not available',
                'action' => $actions,
            ];
        });
    }
}
