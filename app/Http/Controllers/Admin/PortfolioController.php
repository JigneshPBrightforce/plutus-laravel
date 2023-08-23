<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Portfolio;

class PortfolioController extends Controller
{
    
    public function index()
    {
        $arrdata = Portfolio::all();
        return view('admin.portfolio.index', compact('arrdata'));
    }    
}