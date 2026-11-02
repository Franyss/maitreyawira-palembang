<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FacilityDetail extends Model
{
    protected $table = 'facility_detail';
    protected $primaryKey = 'facility_detail_id';

    const CREATED_AT = 'datetime_created';
    const UPDATED_AT = 'datetime_last_updated';

    protected $fillable = [
        'facility_id',
        'facility_detail_desc',
        'facility_detail_content',
    ];

    public function facility()
    {
        return $this->belongsTo(Facility::class, 'facility_id', 'facility_id');
    }
}
