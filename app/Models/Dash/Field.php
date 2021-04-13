<?php

namespace App\Models\Dash;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;
    use Sluggable;

    protected $fillable = ['name', 'prefix', 'type', 'template_id'];
    protected $table = 'template_fields';

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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function template(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Template::class);
    }
}
