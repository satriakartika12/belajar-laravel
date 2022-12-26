<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelasroom extends Model
{
    use HasFactory;
    protected $table = 'kelas';

    public function students()
    {
        return $this->hasMany(student::class, 'kelas_id', 'id');
    }

    public function homeroomteachers()
    {
        return $this->belongsTo(teacher::class, 'teacher_id', 'id');
    }
}
