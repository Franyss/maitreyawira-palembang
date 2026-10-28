<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GallerySchool extends Model
{
    protected $table = 'gallery_school';
    protected $primaryKey = 'gallery_school_id';
    public $timestamps = false;

    protected $fillable = [
        'photo_id',
        'sch_id',
    ];

    public function photo()
    {
        return $this->belongsTo(Gallery::class, 'photo_id', 'gallery_school_id');
    }
    public function school()
    {
        return $this->belongsTo(School::class, 'sch_id', 'sch_id');
    }
}
