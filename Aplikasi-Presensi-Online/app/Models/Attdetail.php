<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\attendance;

class Attdetail extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class, 'student_id');
    }

    public function attendance(){
        return $this->belongsTo(Attendance::class, 'attendance_id');
    }
}
