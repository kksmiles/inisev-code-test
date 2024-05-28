<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'url',
        'description'
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, UserWebsiteSubscription::class)
            ->withPivot('is_subscribed', 'subscribed_at', 'unsubscribed_at')
            ->withTimestamps();
    }
}
