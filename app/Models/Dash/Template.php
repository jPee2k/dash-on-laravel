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
     * o-2-m -> template - Pages
     * Get the page that owns the template.
     */
    public function pages()
    {
        return $this->hasMany(Page::class);
    }

    /**
     * o-2-m -> Template - Fields
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fields(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Field::class);
    }

    /**
     * @param $fields
     * @param $handler
     * @return string
     */
    public function buildHtml($fields, $handler): string
    {
        $html = "";

        if (is_array($fields)) {
            foreach ($fields as $field) {
                $html .= $this->$handler($field);
            }
        }

        return $html;
    }

    /**
     * @param $field
     * @return string
     */
    public function generateFieldHTML($field): string
    {
        // render html from view
        return view('dashboard.template.exist-fields', compact('field'))
            ->render();
    }

    /**
     * @param $field
     * @return string
     */
    public function generateCustomFieldHTML($field): string
    {
        // render html for custom-fields
        return view('dashboard.custom-field.fields', compact('field'))
            ->render();
    }

    public function scopeSearch($query, $search)
    {
        return $query->where('name', 'like', "%{$search}%");
    }
}
