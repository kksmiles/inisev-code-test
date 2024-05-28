<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function websites()
    {
        return $this->belongsToMany(Website::class, UserWebsiteSubscription::class)
            ->withPivot('is_subscribed', 'subscribed_at', 'unsubscribed_at')
            ->withTimestamps();
    }
    public function subscribed_websites()
    {
        return $this->websites()->wherePivot('is_subscribed', true);
    }
    public function unsubscribed_websites()
    {
        return $this->websites()->wherePivot('is_subscribed', false);
    }
}
