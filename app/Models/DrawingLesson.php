<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DrawingLesson extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * RELATIONSHIPS
     */
    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function owner()
    {
        return $this->belongsToMany(User::class);
    }
}
