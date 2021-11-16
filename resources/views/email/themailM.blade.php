@component('mail::message')
<h1>De {{$body['emailuser']}}</h1>
<p>{{ $body['usercontenu'] }} </p>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
