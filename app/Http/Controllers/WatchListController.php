<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class WatchListController extends Controller
{
    public function index(): View
    {
        return view('watchlist.index');
    }

    public function add(): View
    {
        return view('watchlist.add');
    }

    public function token_add(): View
    {
        return view('watchlist.token_add');
    }
}
