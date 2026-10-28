<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Access extends Model
{
    protected $table = 'access';
    protected $primaryKey = 'access_id';
    public $timestamps = false;

    protected $fillable = [
        'access_name',
        'description',
        'created_at',
    ];
}
