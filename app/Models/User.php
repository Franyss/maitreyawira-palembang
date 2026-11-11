<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'user';
    protected $primaryKey = 'user_id';

    const CREATED_AT = 'datetime_created';
    const UPDATED_AT = 'datetime_last_updated';

    protected $fillable = [
        'first_name',
        'last_name',
        'access_id',
        'status',
        'phone',
        'email',
        'password',
        'avatar',
        'datetime_last_login',
    ];

    protected $hidden = [
        'password',
    ];

    public function access()
    {
        return $this->belongsTo(Access::class, 'access_id', 'access_id');
    }
}
