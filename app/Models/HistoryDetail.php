<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistoryDetail extends Model
{
    protected $table = 'history_detail';
    protected $primaryKey = 'history_detail_id';

    const CREATED_AT = 'datetime_created';
    const UPDATED_AT = 'datetime_last_updated';

    protected $fillable = [
        'history_id',
        'history_detail_desc',
        'history_detail_photo',
    ];

    public function history()
    {
        return $this->belongsTo(History::class, 'history_id', 'history_id');
    }
}
