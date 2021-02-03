<?php

namespace App\Http\Controllers;

use App\Enumerations\RoleEnumeration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingPageController extends Controller
{
    /**
     * Display the landing view.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        if(!Auth::check()){
            return view('landingPages.patient');
        }

        switch (Auth::user()->roleable_type) {
            case RoleEnumeration::SYSTEM_ADMIN:
                return view('landingPages.sysAdmin');
            case RoleEnumeration::DERMATOLOGIST:
                return view('landingPages.dermatologist');
            case RoleEnumeration::PHARMACIST:
                return view('landingPages..pharmacist');
            case RoleEnumeration::PHARMACY_ADMIN:
                return view('landingPages.pharmacyAdmin');
            case RoleEnumeration::SUPPLIER:
                return view('landingPages.supplier');
            default:
                return view('landingPages.patient');
        }
    }
}
