<?php

namespace App\Http\Controllers\patient;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class PatientRegister extends Controller
{
    /**
     * patient registration system
     */

     public function register(Request $request)
     {
         $this->validate($request, [

            'name'          => 'required',
            'email'          => 'required|email',
            'password'          => 'required',

         ]);

         Patient::create([
             'name'             => $request->name,
             'email'             => $request->email,
             'password'     => Hash::make($request->password)
         ]);
         return back()->with('success', 'successfully create your account');


     }





}
