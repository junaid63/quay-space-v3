<?php

namespace App\Traits;

trait Refkey
{
    public static function bootGeneratesRefKey()
    {
        static::creating(function ($model) {
            if (empty($model->ref_key)) {
                $model->ref_key = self::generateUniqueKey();
            }
        });
    }

    protected static function generateUniqueKey(int $length = 50): string
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ234567';
        $key = '';
        for ($i = 0; $i < $length; $i++) {
            $key .= $characters[random_int(0, strlen($characters) - 1)];
        }
        return $key;
    }
}
