<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceHour extends Model
{
    protected $table = 'service_hour';

    const CREATED_AT = 'datetime_created';
    const UPDATED_AT = 'datetime_last_updated';

    protected $fillable = [
        'service_day',
        'hour_from',
        'hour_to',
        'sta',
    ];
}
