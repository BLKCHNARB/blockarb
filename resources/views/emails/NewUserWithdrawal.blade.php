@component('mail::message')

Hello {{$name}},<br><br>
@component('mail::panel')
Your withdrawal of {{number_format($amount, 2)}} {{$token}} was successful and your wallet address has been credited.<br>
@endcomponent

Best Regards,<br>
{{ config('app.name') }}
@endcomponent
