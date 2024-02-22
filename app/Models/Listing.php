<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model
{
    use HasFactory;

    /**
     * Scope a query to only include listings of a given type (by tag).
     */
    public function scopeFilterByTag(Builder $query, array $filters) {
        if(($filters['tag']) ?? false) {
            $query->where('tags', 'like', '%'.request('tag').'%');
        }
    }
}
