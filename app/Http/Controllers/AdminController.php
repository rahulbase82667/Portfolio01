<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactInquiry;

class AdminController extends Controller
{
    public function dashboard()
    {
        $inquiries   = ContactInquiry::latest()->paginate(10);
        $unreadCount = ContactInquiry::where('is_read', false)->count();

        return view('admin.dashboard', compact('inquiries', 'unreadCount'));
    }

    public function markAsRead(ContactInquiry $inquiry)
    {
        $inquiry->update(['is_read' => true]);

        return response()->json(['success' => true]);
    }
}