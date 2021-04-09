<?php

namespace App\Models\Dash;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Page extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'status', 'description', 'image_name', 'keywords', 'content_title', 'content_data'];

    public function scopePages($query)
    {
        return $query->select('id', 'name', 'status', 'created_at', 'updated_at')->orderBy('updated_at', 'DESC');
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('name', 'like', "%{$search}%");
    }
}
