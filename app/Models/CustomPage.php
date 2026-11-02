<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomPage extends Model
{
    protected $table = 'custom_page';
    protected $primaryKey = 'custom_page_id';

    const CREATED_AT = 'datetime_created';
    const UPDATED_AT = 'datetime_last_updated';

    protected $fillable = [
        'link_title',
        'link_type',
        'link',
        'title',
        'slug',
        'header_background',
        'font_color',
        'thumbnail',
        'content',
        'creator_id',
        'sta',
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator_id', 'user_id');
    }
}
