<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    protected $table = 'lessons';

    protected $fillable = [
        'season_id',
        'course_id',
        'classroom_id',
        'teacher_id',
    ];

    public function season(): BelongsTo
    {
        return $this->belongsTo(Season::class);
    }


    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }


    public function classroom(): BelongsTo
    {
        return $this->belongsTo(Classroom::class);
    }


    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }

    public $timestamps = false;
}
