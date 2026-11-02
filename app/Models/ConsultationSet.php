<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsultationSet extends Model
{
    protected $table = 'consultation_set';
    protected $primaryKey = 'cons_id';
    public $timestamps = false;

    protected $fillable = [
        'jenjang',
        'cons_jen_jad',
        'cons_hari',
        'cons_tanggal',
        'cons_jam',
        'sta',
        'datetime_apply',
    ];
}
