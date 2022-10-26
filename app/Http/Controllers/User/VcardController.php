<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VcardController extends Controller
{
    public function index()
    {
        return view('user.vcards');
    }

    public function create()
    {
        return view('user.create-vcard');
    }
}
