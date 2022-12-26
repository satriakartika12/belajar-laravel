<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ekstrakulikuler extends Model
{
    use HasFactory;
    protected $table = 'ekstrakulikulers';
    
    public function studentsekskul()
    {
        return $this->belongsToMany(student::class, 'student_ekstrakulikuler', 'ekstrakulikuler_id', 'student_id');
    }
    
}
