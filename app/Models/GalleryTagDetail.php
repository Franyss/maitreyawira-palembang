<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryTagDetail extends Model
{
    protected $table = 'gallery_tag_detail';
    protected $primaryKey = 'gallery_tag_detail_id';
    public $timestamps = false;

    protected $fillable = [
        'photo_id',
        'gallery_tag_id',
    ];
    public function photo()
    {
        return $this->belongsTo(Gallery::class, 'photo_id', 'gallery_school_id');
    }
    public function tag()
    {
        return $this->belongsTo(GalleryTag::class, 'gallery_tag_id', 'gallery_tag_id');
    }
}
