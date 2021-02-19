<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class courseexpert extends Authenticatable
{
    use Notifiable;
    protected $primaryKey = 'courseexpert_id';

    protected $guard = 'courseexpert';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone',
    ];

    // the opposite of fillable is guarded

    protected $guarded =[
        'course_timing_saturday', 'course_timing_sunday',
        'course_timing_monday','course_timing_tuesday',
        'course_timing_wednesday', 'course_timing_thursday',
        'course_timing_friday','teachers_skype_link',
        'is_verified','course_id','appointment_accepted_id'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function courses()
    {
        return $this->hasMany(course::class);
    }

    public function appointment_accepted()
    {
        return $this->hasMany(appointment_accepted::class);
    }



    




}
