@component('mail::message')
Hello {{$investment->user->first_name}},<br><br>

@component('mail::panel')
Your account has been successfully updated with {{number_format($profit, 2)}} {{$token}}.<br>
Your current available balance is {{number_format($investment->amount + $investment->profit, 2)}} {{$token}}.
@endcomponent


Best Regards,<br>
{{ config('app.name') }}
@endcomponent
