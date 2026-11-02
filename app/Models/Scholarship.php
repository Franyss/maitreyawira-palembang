<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    protected $table = 'scholarship';
    protected $primaryKey = 'id_bea';
    public $timestamps = false;

    protected $fillable = [
        'jenjang',
        'nama_siswa',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'no_hp_wa',
        'email',
        'nama_ibu',
        'nama_ayah',
        'no_wa',
        'asal_sekolah',
        'desk_pres',
        'up_doc_bea',
        'schs_id',
        'gallery',
        'datetime_apply',
    ];
}
