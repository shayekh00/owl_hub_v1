<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class user_logs extends Model
{
    protected $guard = 'student';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'user_id', 'user_type', 'page_visited','action_done',
    ];

}
