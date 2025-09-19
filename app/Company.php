<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use LogsActivity , SoftDeletes;
    protected static $logName = 'companies';

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logAll()->useLogName('companies'); 
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value);     
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
        return self::select('id', 'name', 'email', 'phone', 'address', 'status', 'created_at')
            ->get()
            ->map(function ($company) {
                return [
                    'id' => $company->id,
                    'name' => $company->name,
                    'email' => $company->email,
                    'phone' => $company->phone,
                    'address' => $company->address,
                    'status' => ($company->status == 1) ? '<span class="badge bg-label-success">Active</span>' : '<span class="badge bg-label-danger">In Active</span>',
                    'created_at' => $company->created_at->format('d-m-Y H:i'),
                ];
            });
    }
}

