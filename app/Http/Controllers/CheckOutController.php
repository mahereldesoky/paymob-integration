<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckOutController extends Controller
{
        // here you can change this function to get your Model data and Total Amount to send it to paymob
        //here we just use index blade file to send the request

    public function index()  {
        return view('checkout');
    }
}
