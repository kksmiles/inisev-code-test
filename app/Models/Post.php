<?php

namespace App\Models;

use App\Observers\PostObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy([PostObserver::class])]
class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'website_id',
        'title',
        'description',
    ];

    public function website()
    {
        return $this->belongsTo(Website::class);
    }

    public function users_to_notify()
    {
        return $this->belongsToMany(User::class, UserPostNotification::class)
            ->withPivot('sent')
            ->withTimestamps();
    }
}
