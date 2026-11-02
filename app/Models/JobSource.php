<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobSource extends Model
{
    protected $table = 'job_source';
    protected $primaryKey = 'job_source_id';
    public $timestamps = false;

    protected $fillable = [
        'job_source_name',
    ];
}
