<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DomainController extends Controller
{
    public function customDomain()
    {
        return view('user.custom_domain');
    }

    public function subDomain()
    {
        return view('user.subdomain');
    }

    public function agency()
    {
        return view('user.agency');
    }

    public function pwa()
    {
        return view('user.pwa');
    }

    public function seo_wiz()
    {
        return view('user.seo_wiz');
    }
}
