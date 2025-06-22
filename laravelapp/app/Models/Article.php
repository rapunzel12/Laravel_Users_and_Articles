<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    protected $fillable = [
        'user_id', 'title', 'excerpt', 'description', 'min_to_read'
    ];

    protected $casts = [
        'updated_at' => 'datetime',
        'created_at' =>'datetime'
    ];

    public function user() : BelongsTo {
        return $this->belongsTo(related:User::class);
    }
}
