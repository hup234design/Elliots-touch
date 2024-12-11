<?php

namespace App\Models\Content;

use App\Concerns\HasMediables;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Project extends Model implements Sortable
{
    use SortableTrait;
    use HasMediables;

    protected $guarded = [];

    protected function casts() : array
    {
        return [
            'content' => 'array',
            'featured_image' => 'array',
            'is_visible' => 'boolean'
        ];
    }
}
