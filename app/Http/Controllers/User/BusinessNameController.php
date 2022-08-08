<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BusinessNameController extends Controller
{
    public function index()
    {
        return view('user.business-name');
    }

    public function createBusinessName()
    {
        return view('user.create-business-name');
    }
}
