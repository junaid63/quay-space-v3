<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class Matter extends Model
{
    use LogsActivity , SoftDeletes;
    protected static $logName = 'matter';
    protected $fillable = ['client_id' , 'funding_id' ,  'matter_id' , 'status'];
    
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logAll()->useLogName('matter'); 
    }

    public static function get()
    {
        return self::all();
    }

    public static function withstatusget()
    {
        return self::where('status' , 1)->get();
    }

    public function client(){
        return $this->belongsTo(Client::class , 'client_id');
    }

    public function funding(){
        return $this->belongsTo(Funding::class , 'funding_id');
    }

    public function proceedings()
    {
        return $this->belongsToMany(Proceedings::class,'matter_to_proceedings','matter_id','proceedings_id')->withPivot(['created_at', 'updated_at']);
    }

    public function status_detail(){
        return $this->belongsTo(MatterStatus::class , 'status');
    }

    public function timemanagement(){
        return $this->hasMany(TimeManagement::class , 'matter_id')->orderBy('id' , 'DESC');
    }

    public static function fetchForApi()
    {
        return self::select('id', 'client_id', 'funding_id' , 'matter_id' , 'created_at' , 'status')->with('proceedings')
            ->orderByDesc('id')
            ->get()
            ->map(function ($matterlist) {
                $proceedingBadges = $matterlist->proceedings->pluck('title')->map(fn ($p) => '<span class="badge bg-label-info">'.$p.'</span>')->implode(' '); 
                $statusToggle = '';
                if (isset($matterlist->status_detail) && isset($matterlist->status_detail->class) && isset($matterlist->status_detail->title)) {
                    $statusToggle = '<span class="badge bg-label-' . $matterlist->status_detail->class . '">' . $matterlist->status_detail->title . '</span>';
                } else {
                    $statusToggle = '<span class="badge bg-label-danger">Unknown</span>';
                }

                $actions = '
                    <div class="d-flex gap-2">
                        <a href="' . route('dashboard.matterlist.export_data', $matterlist->id) .'" class="btn rounded-pill btn-outline-info waves-effect export-btn">
                            <i class="icon-base ti tabler-file-export icon-22px"></i>
                        </a>
                        <button type="button"  data-id="' . $matterlist->id . '" class="btn rounded-pill btn-outline-warning waves-effect edit-btn"><i class="icon-base ti tabler-edit icon-22px"></i></button>
                        <button type="button"  data-id="' . $matterlist->id . '" class="btn rounded-pill btn-outline-danger waves-effect delete-btn"><i class="icon-base ti tabler-trash icon-22px"></i></button>
                    </div>';

                return [
                    'id' => $matterlist->id,
                    'client_id' => $matterlist->client ? $matterlist->client->name : '',
                    'matter_id' => '<span class="badge bg-label-success">'. $matterlist->matter_id . '</span>',
                    'funding_id' => $matterlist->funding ? $matterlist->funding->title : '',
                    'proceedings'=> $proceedingBadges, 
                    'status' => $statusToggle,
                    'created_at' => $matterlist->created_at->format('d-m-Y H:i'),
                    'action' => $actions,
                ];
            });
    }
}
