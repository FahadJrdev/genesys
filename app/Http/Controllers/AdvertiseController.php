<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class AdvertiseController extends Controller
{
    public function index(): View
    {
        return view('advertise.index');
    }
}
