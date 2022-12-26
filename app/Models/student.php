<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    //protected $table = 'students';

    public function kelas()
    {
        return $this->belongsTo(kelasroom::class, 'kelas_id', 'id');
    }
    public function ekstrakulikulers()
    {
        return $this->belongsToMany(ekstrakulikuler::class, 'student_ekstrakulikuler', 'student_id','ekstrakulikuler_id');
    }
}
