<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestimonyDetail extends Model
{
    protected $table = 'testimony_detail';
    protected $primaryKey = 'testimony_detail_id';

    const CREATED_AT = 'datetime_created';
    const UPDATED_AT = 'datetime_last_updated';

    protected $fillable = [
        'testimony_id',
        'testimony_detail_desc',
        'testimony_detail_content',
        'testimony_detail_youtube_link',
    ];
}
