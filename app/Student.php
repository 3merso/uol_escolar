<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'alunos';

    protected $fillable = [
        'nome',
        'email',
        'senha'
    ];

    public function enrollment()
    {
        return $this->hasOne(Enrollment::class);
    }
}
