<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(ContactRequest $request)
    {
        // Verify reCAPTCHA
        $recaptchaResponse = $request->input('g-recaptcha-response');
        $recaptchaSecret = config('services.recaptcha.secret_key');

        if ($recaptchaSecret) {
            $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => $recaptchaSecret,
                'response' => $recaptchaResponse,
                'remoteip' => $request->ip()
            ]);

            $recaptchaResult = $response->json();

            if (!$recaptchaResult['success'] || $recaptchaResult['score'] < 0.5) {
                return back()->withErrors([
                    'g-recaptcha-response' => 'reCAPTCHA verification failed. Please try again.'
                ])->withInput();
            }
        }

        // Create contact record
        $contact = Contact::create($request->validated());

        // Send email notification to admin
        try {
            Mail::to(config('mail.admin_email', 'info@thenailbarug.com'))
                ->send(new ContactFormMail($contact));
        } catch (\Exception $e) {
            // Log the error but don't fail the request
            \Log::error('Failed to send contact form email: ' . $e->getMessage());
        }

        return back()->with(
            'success',
            'Thank you for your message! We\'ll get back to you within 24 hours to confirm your appointment.'
        );
    }

    public function admin()
    {
        $contacts = Contact::latest()->paginate(20);
        return view('admin.contacts', compact('contacts'));
    }

    public function markAsRead(Contact $contact)
    {
        $contact->markAsRead();
        return back()->with('success', 'Contact marked as read.');
    }
}