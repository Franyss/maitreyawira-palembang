<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Popup extends Model
{
    protected $table = 'popup';

    const CREATED_AT = 'datetime_created';
    const UPDATED_AT = 'datetime_last_updated';

    protected $fillable = [
        'bg_url',
        'content',
        'link',
        'expired_date',
        'desc',
        'sta',
        'user_id',
    ];
}
