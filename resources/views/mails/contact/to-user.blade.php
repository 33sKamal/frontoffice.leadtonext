<x-mail::message>
# Hello Dear {{$name}},

Thank you for reaching out to us through our website. We appreciate you taking the time to contact us.

<x-mail::panel>
We have received your message and want to assure you that it's important to us. Our support team is reviewing your inquiry and will get back to you as soon as possible.

In the meantime, please feel free to check our FAQ section on our website, as it might contain answers to common questions.
</x-mail::panel>

We strive to respond to all inquiries within 1-7 business days. Your patience is greatly appreciated.

Thanks again for contacting us. We look forward to assisting you soon.

Best regards,<br>
{{ config('app.name') }} Support Team
</x-mail::message>