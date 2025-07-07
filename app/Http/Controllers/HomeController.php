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
    public function mCodingHome()
    {
        return view('pages.services.medical-coding');
    }
    public function DenialHome()
    {
        return view('pages.services.denial-management');
    }
    public function NetworkHome()
    {
        return view('pages.services.out-of-network-billing');
    }
     public function RevenueHome()
    {
        return view('pages.services.revenue-cycle-management');
    }
     public function CounsltngHome()
    {
        return view('pages.services.medical-billing-consulting');
    }
    public function OutsourceHome()
    {
        return view('pages.services.outsource-medical-billing');
    }
    public function ArHome()
    {
        return view('pages.services.ar-follow-up');
    }
    public function SpecialitiesHome()
    {
        return view('pages.specialities');
    }
    public function ContactHome()
    {
        return view('pages.contact-us');
    }
    public function ContHome()
    {
        return view('pages.contact-2');
    }
}
