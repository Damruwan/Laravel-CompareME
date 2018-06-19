<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    const ROLE_ADMIN    = 1;
    const ROLE_USER    = 2;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
    
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin()
    {
        if ($this->role_id == self::ROLE_ADMIN) {
            return true;
        }else{
            return false;
        }
    }

    public function isUser()
    {
        if ($this->role_id == self::ROLE_USER) {
            return true;
        }else{
            return false;
        }
    }

    /**
     * User has many Comment.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comment()
    {
        // hasMany(RelatedModel, foreignKeyOnRelatedModel = user_id, localKey = id)
        return $this->hasMany(Comment::class);
    }

    /**
     * User has many Advertisements.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function advertisements()
    {
        // hasMany(RelatedModel, foreignKeyOnRelatedModel = user_id, localKey = id)
        return $this->hasMany(Advertisement::class);
    }
}
