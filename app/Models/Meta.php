<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Meta extends Model
{
    use HasFactory;

    protected $table = 'meta_tags';
    protected $fillable = ['url', 'title', 'description', 'image_name', 'keywords'];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }

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
}
