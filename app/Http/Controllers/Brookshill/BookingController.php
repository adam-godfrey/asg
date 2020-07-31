<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tariff;
use App\Rules\Telephone;

class BookingController extends Controller
{
    public function index()
    {
    	$tariff = Tariff::all();

    	$data = [
    		'tariff' => $tariff
    	];

    	return view('glamping.booking.index')->with($data);
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'telephone' => ['sometimes', new Telephone],
            'dates' => 'required|string',
            'message' => 'required',
        ]);

        return response()->json(['customer' => $plaque->id], 200);
    }
}
