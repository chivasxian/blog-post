<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Parallax\FilamentComments\Models\Traits\HasFilamentComments;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;
    use HasFilamentComments;

    protected $fillable = [
        'user_id',
        'title',
        'content',
        'is_published',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
