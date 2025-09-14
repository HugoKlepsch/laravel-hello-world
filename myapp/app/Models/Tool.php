<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tool extends Model
{
    protected $table = 'tools';
    protected $dates = ['created_at', 'updated_at'];
    protected $fillable = [
        'id',
        'name',
        'signed_out_at',
        'user_id',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'signed_out_at' => 'datetime',
        ];
    }

    // 'user' is the 'user' part of 'user_id' in table.
    protected function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
