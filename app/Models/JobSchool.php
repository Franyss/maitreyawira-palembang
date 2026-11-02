<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobSchool extends Model
{
    protected $table = 'job_school';
    protected $primaryKey = 'job_school_id';
    public $timestamps = false;

    protected $fillable = [
        'job_id',
        'sch_id',
    ];

    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id', 'job_id');
    }
    public function school()
    {
        return $this->belongsTo(School::class, 'sch_id', 'sch_id');
    }
}
