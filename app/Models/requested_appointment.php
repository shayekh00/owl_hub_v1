<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class requested_appointment extends Model
{
    protected $primaryKey = 'requested_appointment_id';

    protected $guarded =[
        'requested_appointment_id','accepted_appointment_id',
        'student_id','courseexperts_id',
        'course_id', 'problem_text', 
        'appointment_timing','is_accepted',
    ];



}
