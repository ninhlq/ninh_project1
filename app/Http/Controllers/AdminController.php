<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin_def.pages.index');
    }

    public function page404()
    {
        return response()->view('admin_def.pages.404', [], 404);
    }

    public function login()
    {
        return view('admin_def.pages.login');
    }

    public function contact()
    {
        return view('admin_def.pages.contact');
    }

    public function footer()
    {
        return view('admin_def.page.footer');
    }

    public function media()
    {
        return view('admin_def.pages.media');
    }
}
