<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CollaborationLogo extends Model
{
    protected $table = 'collaboration_logo';

    // Pemetaan nama kolom timestamp khusus
    const CREATED_AT = 'datetime_created';
    const UPDATED_AT = 'datetime_last_updated';

    protected $fillable = [
        'img',
        'description',
        'sta',
    ];
}
