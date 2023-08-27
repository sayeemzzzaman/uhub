<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $query->where('name', 'like', '%' . request('search') . '%')
                ->orWhere('contributors', 'like', '%' . request('search') . '%')
                ->orWhere('bio', 'like', '%' . request('search') . '%')
                ->orWhere('owner', 'like', '%' . request('search') . '%');
        }

        if ($filters['dept'] ?? false) {
            $query->where('dept', 'like', '%' . request('dept') . '%');
        }
    }
}
