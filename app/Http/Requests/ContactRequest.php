<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'service' => 'nullable|string|in:manicure,pedicure,acrylic_nails,artificial_nails,gel_builder,ombre_nails,eyelashes,eyebrow_shaping,consultation',
            'preferred_date' => 'nullable|date|after_or_equal:today',
            'preferred_time' => 'nullable|string',
            'message' => 'required|string|max:1000',
            'g-recaptcha-response' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please enter your full name.',
            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'message.required' => 'Please enter your message.',
            'message.max' => 'Your message is too long. Please keep it under 1000 characters.',
            'preferred_date.after_or_equal' => 'Please select a date from today onwards.',
            'g-recaptcha-response.required' => 'Please complete the reCAPTCHA verification.'
        ];
    }
}