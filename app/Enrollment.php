<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $table = 'matriculas';

    protected $fillable = [
        'curso_id',
        'aluno_id',
        'ativo',
        'data_admissao'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'aluno_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'curso_id');
    }
}
