@component('mail::message')
# Deal done...

User {{ $deal->user->name }} created new deal

{{ $deal->title }}

Congratulations!!

@component('mail::button', ['url' => $deal->link])
View Details
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
