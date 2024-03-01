<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Listing extends Model
{
    use HasFactory;
    /**
     * The attributes (table columns) that are mass assignable.
     */
    protected $fillable = ['company', 'title', 'location', 'website', 'email', 'tags', 'description'];

    /**
     * Scope a query to only include listings of a given type (by tag).
     */
    public function scopeFilterByTagAndSearch(Builder $query, array $filters) {
        if(($filters['tag']) ?? false) {
            $query->where('tags', 'like', '%'.request('tag').'%');
        }
        if(($filters['search']) ?? false) {
            $query->where('title', 'like', '%'.request('search').'%')
                ->orWhere('tags', 'like', '%'.request('search').'%');
        }
    }
}
