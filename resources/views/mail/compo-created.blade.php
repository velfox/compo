@php dump($compo) @endphp
@component('mail::message')
De compo: {{ $compo->name }} is voor je aangemaakt

Mogen de beste speler winnen!

@component('mail::button', ['url' => url('/compo/' . $compo->id )])
Bekijk hier de voortgang
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
