<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class appointment_images extends Model
{
    protected $primaryKey = 'appointment_images_id';

    protected $guarded =[
        'appointment_images_id', 'accepted_appointment_id','problem_text','filename'
    ];
}
