<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchsFile extends Model
{
    protected $table = 'schs_file';
    public $timestamps = false;

    protected $fillable = [
        'sch_id',
        'file',
    ];
}
