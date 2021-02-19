<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{

    protected $primaryKey = 'course_id';

    protected $guarded =[
        'course_id','courseexperts_id',
        'accepted_appointment_id,','requested_appointment_id,',
        'course_code','university_name',
    ];



}
