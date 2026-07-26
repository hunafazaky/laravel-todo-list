<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
// ADDITIONAL
use Illuminate\Database\Eloquent\Model;

class Subtask extends Model
{
    use HasUuids;

    public $timestamps = false;

    protected $fillable = [
        'task_id',
        'title',
        'is_completed',
    ];

    protected $casts = [
        'is_completed' => 'boolean',
    ];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}
