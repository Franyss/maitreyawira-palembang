<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppConfig extends Model
{
    protected $table = 'app_config';
    public $timestamps = false;

    protected $fillable = [
        'conf_key',
        'conf_value',
    ];
}
