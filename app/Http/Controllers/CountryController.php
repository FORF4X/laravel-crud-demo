<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//     public function __invoke()
//     {
//         $countries = Country::all(['id', 'name']);
//         return view('users.create',compact('countries'));
//     }
}