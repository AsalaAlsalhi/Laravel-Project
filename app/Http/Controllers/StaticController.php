<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class StaticController extends Controller
{
    /**
     * Display the privacy policy page.
     */
    public function privacyPolicy()
    {
        return view('static.privacy-policy');
    }

    /**
     * Display the terms of service page.
     */
    public function termsOfService()
    {
        return view('static.terms-of-service');
    }

    /**
     * Display the about us page.
     */
    public function about()
    {
        return view('static.about');
    }

    /**
     * Display the contact page.
     */
    public function contact()
    {
        return view('static.contact');
    }

    /**
     * Handle contact form submission.
     */
    public function contactSubmit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Here you can send email or save to database
        // Mail::to('admin@mystore.com')->send(new ContactMessage($request->all()));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    /**
     * Display newsletter signup form.
     */
    public function newsletter()
    {
        return view('static.newsletter');
    }

    /**
     * Handle newsletter signup.
     */
    public function newsletterSubmit(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:newsletter_subscribers,email',
        ]);

        // Save to database or send to email service
        // NewsletterSubscriber::create(['email' => $request->email]);

        return redirect()->back()->with('success', 'Thank you for subscribing to our newsletter!');
    }
}