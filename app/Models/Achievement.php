<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    protected $table = 'achievement';
    protected $primaryKey = 'achievement_id';

    // Pemetaan nama kolom timestamp khusus
    const CREATED_AT = 'datetime_created';
    const UPDATED_AT = 'datetime_last_updated';

    protected $fillable = [
        'achievement_title',
        'achievement_slug',
        'achievement_content',
    ];
}
