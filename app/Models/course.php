<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{

    protected $primaryKey = 'course_id';

    protected $guarded =[
        'course_id','courseexperts_id',
        'accepted_appointment_id,','requested_appointment_id,',
        'course_code1','university_name1','course_code2',
        'university_name2','course_code3','university_name3',
        'course_code4','university_name4','course_code5','university_name5',
        'course_code6','university_name6','course_code7','university_name7',
        'course_code8','university_name8',
    ];



}
