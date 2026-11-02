<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryTag extends Model
{
    protected $table = 'gallery_tag';
    protected $primaryKey = 'gallery_tag_id';
    public $timestamps = false;

    protected $fillable = [
        'gallery_tag_name',
        'gallery_tag_slug',
    ];
}
