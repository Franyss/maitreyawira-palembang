<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobDetail extends Model
{
    protected $table = 'job_detail';
    protected $primaryKey = 'job_detail_id';
    public $timestamps = false;

    protected $fillable = [
        'job_id',
        'full_name',
        'jk',
        'email',
        'job_source_id',
        'cv_file',
        'note',
        'date_apply',
    ];

    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id', 'job_id');
    }
    public function source()
    {
        return $this->belongsTo(JobSource::class, 'job_source_id', 'job_source_id');
    }
}
