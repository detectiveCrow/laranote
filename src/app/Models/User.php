<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations;
use Illuminate\Database\Query\Builder;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @inheritdoc
     * @return Relations\HasMany
     */
    public function notes()
    {
        return $this->hasMany(Note::class, 'user_id', 'id');
    }

    /**
     * @param Builder $query
     * @return Builder
     */
    public function scopeFromEmail($query, string $email)
    {
        return $query->where('email', $email);
    }
}
