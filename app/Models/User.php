<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Traits\Refkey;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
use TCG\Voyager\Models\Role;

class User extends \TCG\Voyager\Models\User
{
    use HasApiTokens, HasFactory, Notifiable , LogsActivity;

    protected static $logName = 'users';
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()->logAll()->logOnlyDirty()->useLogName('users');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'ref_key',
        'status',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public static function withstatusget()
    {
        return self::where('status' , 1)->get();
    }

    public function roles()
    {
        return $this->belongsTo(Role::class , 'role_id');
    }

    public static function get()
    {
        return self::all();
    }

    public static function fetchForApi()
    {
        return self::select('id', 'role_id', 'name', 'email' , 'status', 'created_at')
            ->orderByDesc('id')
            ->get()
            ->map(function ($user) {
                $statusToggle = ($user->status == 1)
                    ? '<label class="switch switch-success">
                            <input type="checkbox" class="switch-input status-toggle" data-id="' . $user->id . '" checked>
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
                            <input type="checkbox" class="switch-input status-toggle" data-id="' . $user->id . '">
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
                        <button type="button"  data-id="' . $user->id . '" class="btn rounded-pill btn-outline-warning waves-effect edit-btn"><i class="icon-base ti tabler-edit icon-22px"></i></button>
                        <button type="button"  data-id="' . $user->id . '" class="btn rounded-pill btn-outline-danger waves-effect delete-btn"><i class="icon-base ti tabler-trash icon-22px"></i></button>
                    </div>';

                return [
                    'id' => $user->id,
                    'role' => $user->role ? '<span class="badge bg-label-info">' . ucwords($user->role->name ) . '</span>' : '',
                    'name' => $user->name,
                    'email' => $user->email,
                    'status' => $statusToggle,
                    'created_at' => $user->created_at->format('d-m-Y H:i'),
                    'action' => $actions,
                ];
            });
    }
}
