<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public function thing()
    {
        return $this->belongsTo(Thing::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? null, function ($query, $search) {
            $query->where(
                function($query) use ($search) {
                    return $query->where('reviews.title', 'like', '%'.$search.'%')
                        ->orWhere('things.name', 'like', '%'.$search.'%');
                }
            );
        })->when($filters['category'] ?? null, function ($query, $category) {
            $query->where('things.category', '=', $category);
        });
    }
}
