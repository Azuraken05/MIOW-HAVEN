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
        'type',
        'facebook',
        'instagram',
        'discord'
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

    /**
     * RELATIONSHIPS
     */
    public function artworks()
    {
        return $this->hasMany(Image::class);
    }

    public function userReports()
    {
        return $this->hasMany(UserReports::class);
    }

    public function drawingLessons()
    {
        return $this->hasMany(DrawingLesson::class);
    }

    public function ownedLessons()
    {
        return $this->belongsToMany(DrawingLesson::class);
    }
}
