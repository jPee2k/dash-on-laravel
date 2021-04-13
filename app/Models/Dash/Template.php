<?php

namespace App\Models\Dash;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = ['name', 'prefix'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'prefix' => [
                'source' => 'name',
                'separator' => '_',
                'unique' => true,
            ]
        ];
    }

    /**
     * o-2-m -> Template - Fields
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fields(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Field::class);
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('name', 'like', "%{$search}%");
    }
}
