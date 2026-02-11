<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactSubmissionMail;
use App\Models\ContactSubmission;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function store(ContactFormRequest $request)
    {
        $submission = ContactSubmission::create($request->validated());

        Mail::to(config('mail.from.address'))
            ->send(new ContactSubmissionMail($submission));

        return back()->with('success', 'Thank you for reaching out. Our team will contact you within 24 hours.');
    }

    public function submissions()
    {
        $submissions = ContactSubmission::latest()->paginate(20);

        return view('admin.submissions', compact('submissions'));
    }

    public function markRead(ContactSubmission $submission)
    {
        $submission->update(['is_read' => true]);

        return back()->with('success', 'Submission marked as read.');
    }
}
