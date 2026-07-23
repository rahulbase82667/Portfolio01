<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\ContactInquiry;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name'       => ['required', 'string', 'max:255'],
            'email'           => ['required', 'email', 'max:255'],
            'phone'           => ['nullable', 'string', 'max:20'],
            'service_needed'  => ['nullable', 'string', 'max:100'],
            'budget_range'    => ['nullable', 'string', 'max:100'],
            'project_details' => ['required', 'string'],
        ]);

        ContactInquiry::create($validated);

        return back()->with('success', 'Thanks! We\'ll get back to you within 2 hours.');
    }
}