<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tariff;

class IndexController extends Controller
{
    public function index()
    {
    	$tariff = Tariff::all();

    	$data = [
    		'tariffData' => $tariff
    	];

    	return view('admin.dashboard.index')->with($data);
    }
}
