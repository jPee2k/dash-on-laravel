<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    use HasFactory;

    protected $table = 'meta_tags';
    protected $fillable = ['url', 'title', 'description', 'image', 'keywords'];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
