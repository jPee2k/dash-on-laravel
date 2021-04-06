<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Page extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'status', 'slug', 'url', 'title', 'description', 'image_name', 'keywords', 'content_data', 'content_title'];

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

    public function setSlug()
    {
        if ($this->slug === null) {
            $this->slug = Str::slug($this->name);
            $this->save();
        }
    }
}
