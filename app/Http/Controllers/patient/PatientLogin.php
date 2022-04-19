<?php

namespace App\Http\Controllers\patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientLogin extends Controller
{
    /**
     * patient login system
     */
    public function login(Request $request)
    {
        $this->validate($request, [
            'email'             => 'required|email',
            'password'             => 'required',
        ]);

        if (Auth::guard('patient')->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            return redirect('patientDashboard');
        } else {
            return back()->with('danger', 'Incorrect email or password');
        }






    }

    public function patientLogout()
    {
        Auth::guard('patient')->logout();
        return redirect('login');
    }






}
