@extends('layouts.app')

@section('title', 'Privacy Policy')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold text-center mb-8">Privacy Policy</h1>
        
        <div class="bg-white rounded-lg shadow-lg p-8 space-y-6">
            <div class="text-center mb-8">
                <p class="text-gray-600">Last updated: {{ date('F j, Y') }}</p>
            </div>

            <section>
                <h2 class="text-xl font-semibold mb-4">Information We Collect</h2>
                <p class="text-gray-700 leading-relaxed mb-4">
                    We collect information you provide directly to us when you register on our site, make a purchase, 
                    or use our services. This information may include your name, email address, phone number, 
                    shipping address, and payment information.
                </p>
                <p class="text-gray-700 leading-relaxed">
                    We also automatically collect certain information when you visit our website, including your 
                    IP address, browser type, operating system, and browsing behavior.
                </p>
            </section>

            <section>
                <h2 class="text-xl font-semibold mb-4">How We Use Your Information</h2>
                <p class="text-gray-700 leading-relaxed mb-4">
                    We use the information we collect to:
                </p>
                <ul class="text-gray-700 space-y-2 ml-6">
                    <li>• Process and fulfill your orders</li>
                    <li>• Provide customer support</li>
                    <li>• Send you updates about your orders</li>
                    <li>• Improve our services and website</li>
                    <li>• Send promotional emails (with your consent)</li>
                </ul>
            </section>

            <section>
                <h2 class="text-xl font-semibold mb-4">Information Sharing</h2>
                <p class="text-gray-700 leading-relaxed">
                    We do not sell, trade, or otherwise transfer your personal information to third parties 
                    without your explicit consent, except as described in this policy. We may share your 
                    information with trusted service providers who assist us in operating our website and 
                    conducting our business.
                </p>
            </section>

            <section>
                <h2 class="text-xl font-semibold mb-4">Data Security</h2>
                <p class="text-gray-700 leading-relaxed">
                    We implement appropriate security measures to protect your personal information against 
                    unauthorized access, alteration, disclosure, or destruction. However, no method of 
                    transmission over the internet is 100% secure.
                </p>
            </section>

            <section>
                <h2 class="text-xl font-semibold mb-4">Your Rights</h2>
                <p class="text-gray-700 leading-relaxed">
                    You have the right to access, update, or delete your personal information. You may also 
                    opt out of receiving promotional emails at any time. To exercise these rights, please 
                    contact us using the information provided below.
                </p>
            </section>

            <section>
                <h2 class="text-xl font-semibold mb-4">Contact Us</h2>
                <p class="text-gray-700 leading-relaxed">
                    If you have any questions about this Privacy Policy, please contact us at:
                    <br><br>
                    Email: privacy@mystore.com<br>
                    Phone: +968 1234 5678<br>
                    Address: Muscat, Oman
                </p>
            </section>
        </div>
    </div>
</div>
@endsection