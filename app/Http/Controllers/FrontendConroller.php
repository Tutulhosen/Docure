<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class FrontendConroller extends Controller
{
    /**
     * home page
     */
    public function index()
    {
       return View('docure.pages.home');
    }

        /**
     * login page
     */
    public function login()
    {
       return View('docure.pages.login');
    }

          /**
     * docreg page
     */
    public function doctorReg()
    {
       return View('docure.pages.doctor.reg');
    }



     /**
     * patientreg page
     */
    public function patientReg()
    {
       return View('docure.pages.patient.reg');
    }

         /**
     * patientdash page
     */
    public function patientDash()
    {
       return View('docure.pages.patient.dashboard');
    }


         /**
     *doctorreg page
     */
    public function doctorDash()
    {
       return View('docure.pages.doctor.dashboard');
    }





}
