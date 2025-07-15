@extends('layouts.app')

@section('title', 'Terms of Service')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold text-center mb-8">Terms of Service</h1>
        
        <div class="bg-white rounded-lg shadow-lg p-8 space-y-6">
            <div class="text-center mb-8">
                <p class="text-gray-600">Last updated: {{ date('F j, Y') }}</p>
            </div>

            <section>
                <h2 class="text-xl font-semibold mb-4">Acceptance of Terms</h2>
                <p class="text-gray-700 leading-relaxed">
                    By accessing and using our website and services, you agree to be bound by these Terms of Service 
                    and all applicable laws and regulations. If you do not agree with any of these terms, 
                    you are prohibited from using our services.
                </p>
            </section>

            <section>
                <h2 class="text-xl font-semibold mb-4">Use of Service</h2>
                <p class="text-gray-700 leading-relaxed mb-4">
                    You may use our service for lawful purposes only. You agree not to use the service:
                </p>
                <ul class="text-gray-700 space-y-2 ml-6">
                    <li>• For any unlawful purpose or to solicit others to perform unlawful acts</li>
                    <li>• To violate any international, federal, provincial, or state regulations, rules, laws, or local ordinances</li>
                    <li>• To infringe upon or violate our intellectual property rights or the intellectual property rights of others</li>
                    <li>• To harass, abuse, insult, harm, defame, slander, disparage, intimidate, or discriminate</li>
                    <li>• To submit false or misleading information</li>
                </ul>
            </section>

            <section>
                <h2 class="text-xl font-semibold mb-4">Account Registration</h2>
                <p class="text-gray-700 leading-relaxed">
                    When you create an account with us, you must provide information that is accurate, complete, 
                    and current at all times. You are responsible for safeguarding the password and for all 
                    activities that occur under your account.
                </p>
            </section>

            <section>
                <h2 class="text-xl font-semibold mb-4">Products and Services</h2>
                <p class="text-gray-700 leading-relaxed">
                    All products and services are subject to availability. We reserve the right to discontinue 
                    any product or service at any time. Prices are subject to change without notice. We strive 
                    to display accurate product information but cannot guarantee that all details are error-free.
                </p>
            </section>

            <section>
                <h2 class="text-xl font-semibold mb-4">Payment and Billing</h2>
                <p class="text-gray-700 leading-relaxed">
                    All payments are processed securely through our payment partners. You agree to provide 
                    current, complete, and accurate purchase and account information for all purchases. 
                    You agree to promptly update your account and other information.
                </p>
            </section>

            <section>
                <h2 class="text-xl font-semibold mb-4">Refunds and Returns</h2>
                <p class="text-gray-700 leading-relaxed">
                    Our refund and return policy allows returns within 30 days of purchase for most items. 
                    Items must be in original condition and packaging. Custom or personalized items may not 
                    be eligible for return. Please contact our customer service for return authorization.
                </p>
            </section>

            <section>
                <h2 class="text-xl font-semibold mb-4">Limitation of Liability</h2>
                <p class="text-gray-700 leading-relaxed">
                    In no event shall MyStore be liable for any indirect, incidental, special, consequential, 
                    or punitive damages, including without limitation, loss of profits, data, use, goodwill, 
                    or other intangible losses, resulting from your use of the service.
                </p>
            </section>

            <section>
                <h2 class="text-xl font-semibold mb-4">Changes to Terms</h2>
                <p class="text-gray-700 leading-relaxed">
                    We reserve the right to modify or replace these Terms at any time. If a revision is material, 
                    we will try to provide at least 30 days notice prior to any new terms taking effect.
                </p>
            </section>

            <section>
                <h2 class="text-xl font-semibold mb-4">Contact Information</h2>
                <p class="text-gray-700 leading-relaxed">
                    If you have any questions about these Terms of Service, please contact us at:
                    <br><br>
                    Email: legal@mystore.com<br>
                    Phone: +968 1234 5678<br>
                    Address: Muscat, Oman
                </p>
            </section>
        </div>
    </div>
</div>
@endsection