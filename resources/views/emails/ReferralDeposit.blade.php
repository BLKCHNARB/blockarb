@component('mail::message')
Hello {{$user->referrer->first_name}},<br><br>

@component('mail::panel')
Your referral, {{$user->first_name." ".$user->last_name}} has made a deposit of ${{number_format($amount, 2)}}.
You have earned a 5% referral bonus of ${{number_format($referralAmount, 2)}}.<br>
@endcomponent


Best Regards,<br>
{{ config('app.name') }}
@endcomponent
