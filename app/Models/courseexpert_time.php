<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class courseexpert_time extends Model
{
    protected $primaryKey = 'time_id';

    protected $guarded =[
        'time_id','courseexperts_id',
        'time,','day,',
        
    ];
}
