<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AchievementDetail extends Model
{
    protected $table = 'achievement_detail';
    protected $primaryKey = 'achievement_detail_id';

    const CREATED_AT = 'datetime_created';
    const UPDATED_AT = 'datetime_last_updated';

    protected $fillable = [
        'achievement_id',
        'achievement_detail_desc',
        'achievement_detail_content',
        'achievement_detail_youtube_link',
    ];

    // Relasi balik ke model Achievement
    public function achievement()
    {
        return $this->belongsTo(Achievement::class, 'achievement_id', 'achievement_id');
    }
}
