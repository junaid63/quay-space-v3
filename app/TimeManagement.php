<?php

namespace App;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class TimeManagement extends Model
{
    use LogsActivity;
    protected $table = 'time_managements';
    protected static $logName = 'time_management';

    protected $fillable = ['date' , 'activity_id', 'matter_id' , 'description' , 'units' , 'amount' , 'user_id'];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logAll()->useLogName('time_management');
    }

    public function activity_detail(){
        return $this->belongsTo(Activity::class , 'activity_id');
    }

    public function matter_detail(){
        return $this->belongsTo(Matter::class , 'matter_id');
    }

    public function user_detail(){
        return $this->belongsTo(User::class , 'user_id');
    }

    public static function get()
    {
        return self::all();
    }

    public static function calculateamount($matterid)
    {
        return self::where('matter_id' , $matterid)->sum('amount');
    }

    public static function fetchForApi(Request $request)
    {
        $query = self::select('id', 'date', 'activity_id', 'matter_id', 'description', 'units', 'amount', 'user_id');

        if ($request->has('client') && $request->client) {
            $query->whereHas('matter_detail.client', function($query) use ($request) {
                $query->where('client_id', $request->client);
            });
        }

        if ($request->has('activity') && $request->activity) {
            $query->where('activity_id', $request->activity);
        }

        if ($request->has('feeearner') && $request->feeearner) {
            $query->where('user_id', $request->feeearner);
        }

        if ($request->has('matter') && $request->matter) {
            $query->where('matter_id', $request->matter);
        }

        $timemanagementData = $query->orderBy('id', 'desc')->get();
        $totalAmount = $timemanagementData->sum('amount');

        return response()->json([
            'data' => $timemanagementData->map(function ($timemanagement) {
                $actions = '
                    <div class="d-flex gap-2">
                        <button type="button" data-id="' . $timemanagement->id . '" class="btn btn-outline-warning waves-effect edit-btn common-btn">
                            <i class="icon-base ti tabler-edit icon-22px"></i>
                        </button>
                    </div>';

                return [
                    'id' => 'MMO-' . $timemanagement->id,
                    'client' => $timemanagement->matter_detail && $timemanagement->matter_detail->client
                        ? '<span class="badge bg-label-purple">' . $timemanagement->matter_detail->client->name . '</span>'
                        : '',
                    'date' => date('d-M-Y', strtotime($timemanagement->date)),
                    // 'activity_id' => $timemanagement->activity_detail ? $timemanagement->activity_detail->title : 'N/A',
                    'activity_id' => $timemanagement->activity_detail ? '<span class="desc-width-set" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="' . $timemanagement->activity_detail->title . '" title="' . $timemanagement->activity_detail->title . '">' . $timemanagement->activity_detail->title . '</span>' : 'N/A',
                    'matter_id' => $timemanagement->matter_detail
                        ? '<a href = "' . route('dashboard.matterlist.export_data', $timemanagement->matter_detail->id) . '" style="text-decoration: none;"><span class="badge bg-label-info">' . $timemanagement->matter_detail->matter_id . '</span></a>'
                        : 'No matter',
                    'description' => '<span class="desc-width-set" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="' . ($timemanagement->description ?: 'No description available') . '" title="' . ($timemanagement->description ?: 'No description available') . '">' . ($timemanagement->description ?: 'No description available') . '</span>',
                    'units' => $timemanagement->units ?: 'N/A',
                    'amount' => '&pound;' . $timemanagement->amount,
                    'user_id' => $timemanagement->user_detail
                        ? '<span class="badge bg-label-warning">' . $timemanagement->user_detail->name . '</span>'
                        : 'Unknown User',
                    'created_at' => $timemanagement->created_at
                        ? $timemanagement->created_at->format('d-m-Y H:i')
                        : 'Not available',
                    'action' => $actions
                ];
            }),
            'total_amount' => number_format($totalAmount , 2),
        ]);
    }

}
