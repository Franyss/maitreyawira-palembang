<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppMenu extends Model
{
    protected $table = 'app_menu';
    protected $primaryKey = 'menu_id';

    const CREATED_AT = 'datetime_created';
    const UPDATED_AT = 'datetime_last_updated';

    protected $fillable = [
        'title',
        'slug',
        'link',
        'background_header',
        'font_color',
        'parent_id',
        'allow_edit',
        'status',
    ];
}
