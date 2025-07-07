<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpecialityController extends Controller
{
    public function show($slug)
    {
        $specialities = [
            'orthopedic' => 'Orthopedic Billing Content',
            'urology' => 'Urology Billing Content',
            'dental' => 'Dental Billing Content',
            'PathologyBilling' => 'Pathology Billing Content',
            'MentalHealth' => 'Mental Health  Content',
            'RadiologyBilling' => 'Radiology Billing Content',
            'CardiologyBilling' => 'Cardiology Billing Content',
            'NeurosurgeryBilling' => 'Neurosurgery Billing Content',
            'DermatologyBilling' => 'Dermatology Billing Content',
            'DermatologyBilling' => 'Dermatology Billing Content',
            'RehabBilling' => 'Rehab Billing Content',
            'Allergy & Immunology' => 'Allergy & Immunology Billing Content',
            'PediatricBilling' => 'Pediatric Billing Content',
            'OphthalmologyBilling' => 'Ophthalmology Billing Content',
            'PediatricBilling' => 'Pediatric Billing Content',
            'GeriatricsBilling' => 'Geriatrics Billing Content',
            'NephrologyBilling' => 'Nephrology Billing Content',
           
        ];

        if (!array_key_exists($slug, $specialities)) {
            abort(404);
        }

        return view('pages.speciality', [
            'slug' => $slug,
            'content' => $specialities[$slug],
        ]);
    }
}