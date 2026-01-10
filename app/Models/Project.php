<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'long_description',
        'image',
        'technologies',
        'features',
        'is_featured',
        'order',
    ];

    protected $casts = [
        'technologies' => 'array',
        'features' => 'array',
        'is_featured' => 'boolean',
    ];

    // Automatically generate slug from title
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($project) {
            if (empty($project->slug)) {
                $project->slug = Str::slug($project->title);
            }
        });
    }

    // Scope for featured projects
    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    // Scope for ordering
    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'asc')->orderBy('created_at', 'desc');
    }
}
