@component('mail::message')

Hello,<br><br>

@component('mail::panel')
    
You have a new referral. {{$name}} has just opened an account! <br><br> You will receive 5% of every investment made by your referral. <br>
Thank you for spreading the word
@endcomponent

Best Regards,<br>
{{ config('app.name') }}
@endcomponent
