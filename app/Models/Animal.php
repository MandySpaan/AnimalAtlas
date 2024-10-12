<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'scientific_name',
        'description',
        'image_url',
        'category',
        'type',
        'diet',
        'habitat',
    ];
    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }

    // Get the users that like the animal
    public function likedByUsers()
    {
        return $this->belongsToMany(User::class, 'likes');
    }

    // Get the count of likes for the animal
    public function getLikesCountAttribute(): int
    {
        return $this->likedByUsers()->count();
    }

    public function isLikedByUser($userId): bool
    {
        return $this->likedByUsers()->where('user_id', $userId)->exists();
    }
}
