<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Commons extends Controller
{
    function contactus()
    {
        return view('commons.contactus');
    }
}
