<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class accepted_appointment extends Model
{
    protected $primaryKey = 'accepted_appointment_id';

    protected $guarded =[
        'accepted_appointment_id', 'requested_appointment_id',
         'student_id','courseexperts_id',
        'course_id', 'problem_text', 
        'appointment_timing','is_accepted',
    ];

    // public function requested_appointments()
    // {
    //     return $this->hasOne(requested_appointment::class);
    // }

    public function courses()
    {
        return $this->hasOne(course::class);
    }

    public function images()
    {
        return $this->hasMany(appointment_images::class);
    }



}
