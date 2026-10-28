<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table = 'history';
    protected $primaryKey = 'history_id';

    const CREATED_AT = 'datetime_created';
    const UPDATED_AT = 'datetime_last_updated';

    protected $fillable = [
        'history_title',
        'history_date',
        'color',
    ];

    public function details()
    {
        return $this->hasMany(HistoryDetail::class, 'history_id', 'history_id');
    }
}
