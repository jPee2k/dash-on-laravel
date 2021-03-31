<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'status'];

    public function meta()
    {
        return $this->hasOne(Meta::class);
    }

    public function customFields()
    {
        return $this->hasMany(CustomField::class);
    }
}
