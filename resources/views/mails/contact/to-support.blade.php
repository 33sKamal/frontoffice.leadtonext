<x-mail::message>
# Hello chef
New Message from

<x-mail::panel>
    <p>Name: <strong>{{$name}}</strong></p>
    <p>Email: <strong>{{$email}}</strong></p>
    <p>Phone: <strong>{{$phone}}</strong></p>
    <p>message: <strong>{{$messageText}}</strong></p>
</x-mail::panel>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>