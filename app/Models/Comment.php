<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post; 

class Comment extends Model
{
    protected $table = "comments";

    public function Post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
