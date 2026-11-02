<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'gallery';
    protected $primaryKey = 'gallery_school_id';
    public $timestamps = false;

    protected $fillable = [
        'title',
        'description',
        'file',
        'type',
    ];
}
