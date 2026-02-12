<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\ServiceHeading;
use App\Traits\Slug;

class Service extends Model
{
    use SoftDeletes, Slug;
    protected static $logName = 'service';
    protected $fillable = ['title', 'image', 'icon', 'slug' , 'status'];

    public static function withstatusget()
    {
        return self::where('status' , 1)->get();
    }

    public function headings()
    {
        return $this->hasMany(ServiceHeading::class, 'service_id');
    }

    public static function fetchForApi()
    {
        return self::select('id', 'title',  'image', 'icon', 'slug', 'status', 'created_at')
            ->orderByDesc('id')
            ->get()
            ->map(function ($services) {
                // ✅ Normalize path (replace backslashes)
                $cleanImage = str_replace('\\', '/', $services->image);
                $cleanIcon = str_replace('\\', '/', $services->icon);

                // ✅ Build full URL
                $imageUrl = $cleanImage
                    ? asset('storage/' . ltrim($cleanImage, '/'))
                    : asset('images/no-image.png');

                $iconUrl = $cleanIcon 
                    ? asset('storage/' . ltrim($cleanIcon, '/'))
                    : assert('icon/no-icon.png');


                $imageTag = '<img src="' . $imageUrl . '" alt="Service Image" width="70" height="60" class="rounded" style="object-fit:cover;">';
                $iconTag = '<img src="' . $iconUrl . '" alt="Service Image" width="50" class="rounded" style="aspect-ratio: 1;object-fit:contain;padding: 10px;border: 1px solid #d5d5d5;">';

                $statusToggle = ($services->status == 1)
                    ? '<label class="switch switch-success">
                            <input type="checkbox" class="switch-input status-toggle" data-id="' . $services->id . '" checked>
                            <span class="switch-toggle-slider">
                                <span class="switch-on"><i class="icon-base ti tabler-check"></i></span>
                                <span class="switch-off"><i class="icon-base ti tabler-x"></i></span>
                            </span>
                    </label>'
                    : '<label class="switch switch-danger">
                            <input type="checkbox" class="switch-input status-toggle" data-id="' . $services->id . '">
                            <span class="switch-toggle-slider">
                                <span class="switch-on"><i class="icon-base ti tabler-check"></i></span>
                                <span class="switch-off"><i class="icon-base ti tabler-x"></i></span>
                            </span>
                    </label>';

                $actions = '
                    <div class="d-flex gap-2">
                        <button type="button" data-id="' . $services->id . '" class="btn rounded-pill btn-outline-warning waves-effect edit-btn">
                            <i class="icon-base ti tabler-edit icon-22px"></i>
                        </button>
                        <button type="button" data-id="' . $services->id . '" class="btn rounded-pill btn-outline-danger waves-effect delete-btn">
                            <i class="icon-base ti tabler-trash icon-22px"></i>
                        </button>
                    </div>';

                return [
                    'id' => $services->id,
                    'title' => $services->title,
                    'image' => $imageTag,
                    'icon' => $iconTag,
                    'status' => $statusToggle,
                    'created_at' => $services->created_at->format('d-m-Y H:i'),
                    'action' => $actions,
                ];
            });
    }


}
