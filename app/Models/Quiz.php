<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $table = "quizs";
    protected $fillable = [
        'course_name', 'question_number','result', 'user_id',
    ];
    protected $hidden = [];  // Hide The Variable from select
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
