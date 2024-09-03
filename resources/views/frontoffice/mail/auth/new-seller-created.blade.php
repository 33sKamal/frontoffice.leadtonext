<x-mail::message>
# Welcome to {{ config('app.name') }}!

Hello {{ $fullName }},

Welcome to {{ config('app.name') }}! We're excited to have you onboard. Your registration was successful, and you now have access to our comprehensive suite of e-commerce management tools.

At {{ config('app.name') }}, we provide everything you need to manage your e-commerce workflow efficiently—from warehousing and stocking to shipping confirmation and more.

<x-mail::button :url="route('back-office.dashboard.index')">
Go to Dashboard
</x-mail::button>

Here’s what you can do next to get started:

- **Set Up Your Warehouse:** 
- **Manage Stock:** 
- **Process Orders:** 
- **Track Shipments:** 
- **ANd more** 

If you have any questions or need assistance, our support team is here to help. Contact us at [contact@leadtonext.com](mailto:contact@leadtonext.com) anytime.

Thanks again for choosing {{ config('app.name') }}. We look forward to supporting your e-commerce journey!

Best Regards,<br>
The {{ config('app.name') }} Team
</x-mail::message>
