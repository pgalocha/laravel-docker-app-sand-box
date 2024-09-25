<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Application;
use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;

class HomeController extends Controller
{
    /**
     * @return View|Factory|Application
     */
    public function index(): View|Factory|Application
    {
        return view('index');
    }
}
