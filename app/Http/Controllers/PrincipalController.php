<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PrincipalController extends Controller
{
    
    public function index()
    {
        return view('Index');
    }
    
    public function tickets()
    {
        return view('tickets');
    }

    public function visitors()
    {
        return view('visitors');
    }
    
    public function calendar()
    {
        return view('calendar');
    }

}
