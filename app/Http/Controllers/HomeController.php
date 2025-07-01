<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }
    public function MedicalHome()
    {
        return view('pages.services.medical-billing');
    }
    public function CredentialingHome()
    {
        return view('pages.services.medical-credentialing');
    }
}
