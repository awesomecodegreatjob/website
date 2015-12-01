<?php

namespace ACGJ;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class Project extends Model
{
    public $fillable = [
        'name',
        'description',
        'image_url',
    ];

    public function setImageAttribute(UploadedFile $file)
    {
        // Todo: This
    }

    public function getImageAttribute()
    {
        // Todo: Also, this
        return null;
    }
}
