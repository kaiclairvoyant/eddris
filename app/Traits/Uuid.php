<?php

namespace App\Traits;

trait Uuid
{
    public static function bootUuid(): void
    {
        static::creating(function ($model) {
            $model->id = (string) \Ramsey\Uuid\Uuid::uuid4()->toString();
        });
    }
}
