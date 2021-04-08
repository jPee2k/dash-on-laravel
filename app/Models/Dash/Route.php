<?php

namespace App\Models\Dash;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Route extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * @param $slug
     * @param $model
     * @param $id
     * @param int $i
     * @return bool
     */
    public function setSlug($slug, $model, $id, $i = 0): bool
    {

        if (!$this->query()->where('slug', $slug)->count()) {
            $this->slug = $slug;
            $this->route = "{$model}_id={$id}";

            return $this->save();
        }

        $i++;

        return $this->setSlug("{$slug}-{$i}", $model, $id, $i);
    }

    /**
     * @param $model
     * @param $id
     * @return string
     */
    public function getSlug($model, $id): string
    {
        return ($result = $this->query()->where('route', "{$model}_id={$id}")->get('slug')->first()) ? $result->slug : "";
    }

    /**
     * @param $model
     * @param $id
     * @return bool
     */
    public function removeSlug($model, $id): bool
    {
        return $this->query()->where('route', "{$model}_id={$id}")->delete();
    }
}
