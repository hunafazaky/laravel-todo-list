<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
// ADDITIONAL
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasUuids;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'priority',
        'status',
        'due_date',
        'tags',
    ];

    protected $casts = [
        'tags' => 'array',
        'due_date' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subtasks()
    {
        return $this->hasMany(Subtask::class);
    }
}
