<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class MatterToProceeding extends Model
{
    use LogsActivity;
    protected static $logName = 'matter_to_proceeding';

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logAll()->useLogName('matter_to_proceeding'); 
    }
}
