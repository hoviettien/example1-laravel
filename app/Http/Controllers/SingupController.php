<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class SingupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('singup');
    }
    public function displayInfor(Request $request): View
    {
        $userSession = session('userSession',[]);
        $user = [
            'name'    => $request->input('name'),
            'age'     => $request->input('age'),
            'date'    => $request->input('date'),
            'phone'   => $request->input('phone'),
            'web'     => $request->input('web'),
            'address' => $request->input('address')
        ];
        $userSession[] = $user;
        session(['userSession'=> $userSession]);
        return view('singup')->with('userSession',$userSession);
    }
}
