<?php

namespace App\Traits\Eloquent;

use App\Enums\PublishedEnum;
use Illuminate\Database\Eloquent\Builder;

trait HasPublished
{
    public function scopePublished(Builder $builder): Builder
    {
        return $builder->where('status', PublishedEnum::PUBLISHED->value);
    }

    public function scopeUnpublished(Builder $builder): Builder
    {
        return $builder->where('status', PublishedEnum::UNPUBLISHED->value);
    }
}
