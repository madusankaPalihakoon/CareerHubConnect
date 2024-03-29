<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'title',
    //     'company',
    //     'location',
    //     'website',
    //     'email',
    //     'tags',
    //     'description'
    // ];

    public function scopeFilter($query, array $filters)
    {
        if( $filters['tag'] ?? false) {
            $query->Where('tags', 'like', '%' . request('tag') . '%');
        }

        if( $filters['search'] ?? false) {
            $query->Where('title', 'like', '%' . request('search') . '%')
            ->orWhere('description', 'like', '%' . request('search') . '%')
            ->orWhere('tags', 'like', '%' . request('search') . '%');
        }
    }
}
