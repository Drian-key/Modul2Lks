<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function Classe(){
        return $this->belongsTo(Classe::class, 'class_id');
    }

    public function Subject(){
        return $this->belongsTo(Subject::class, 'subject_id');
    }


}
