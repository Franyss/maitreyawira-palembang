<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = 'program';
    protected $primaryKey = 'program_id';

    const CREATED_AT = 'datetime_created';
    const UPDATED_AT = 'datetime_last_updated';

    protected $fillable = [
        'program_title',
        'program_slug',
        'program_content',
    ];
}
