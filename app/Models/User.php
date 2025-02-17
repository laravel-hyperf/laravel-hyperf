<?php

declare(strict_types=1);

namespace App\Models;

use LaravelHyperf\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     */
    protected array $fillable = [
        'name',
        'email',
        'email_verified_at',
        'password',
    ];
}
