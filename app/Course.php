<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'cursos';

    protected $fillable = [
        'nome',
        'data_inicio'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}