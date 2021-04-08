<?php

namespace App\Models\Dash;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Page extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'status', 'description', 'image_name', 'keywords', 'content_title', 'content_data'];

    public function uploadImage($image)
    {
        if ($image === null) {
            return;
        }

        $this->removeImage();

        $filename = uniqid(time()) . '.' . $image->extension();
        // dd(get_class_methods($image));
        $image->storeAs('uploads/images/', $filename);
        $this->image_name = $filename;
        $this->save();
    }

    public function getImage()
    {
        if ($this->image_name === null) {
            return;
        }

        return '/uploads/images/' . $this->image_name;
    }

    public function removeImage()
    {
        if ($this->image_name !== null) {
            Storage::delete('uploads/images/' . $this->image_name);
        }
    }

    public function scopePages ($query)
    {
        return $query->select('id', 'name', 'status', 'created_at', 'updated_at')->orderBy('updated_at', 'DESC');
    }

    public function scopeSearch ($query, $search)
    {
        return $query->where('name', 'like', "%{$search}%");
    }
}
