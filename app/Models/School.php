<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $table = 'school';
    protected $primaryKey = 'sch_id';

    const CREATED_AT = 'datetime_created';
    const UPDATED_AT = 'datetime_last_updated';

    protected $fillable = [
        'sch_background_header',
        'sch_font_color',
        'sch_name',
        'sch_address',
        'sch_phone',
        'sch_slug',
        'sch_opening_speech',
        'sch_img',
    ];
}
