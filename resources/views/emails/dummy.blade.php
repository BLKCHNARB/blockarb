@component('mail::message')

{{-- Hello {{$name}},<br><br> --}}
Hello Adrian,<br><br>
@component('mail::panel')
{{-- Your deposit of ${{number_format($amount, 2)}} has been received.<br> --}}
Your deposit of 67 USDT is now available in your BlockArb account. Log in to check your balance.<br>
@endcomponent

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Best Regards,<br>
{{ config('app.name') }}
@endcomponent

{{--  --}}

@component('mail::message')
Hello {{$user['first_name']}},<br><br>

@component('mail::panel')

Welcome to BloackArb.<br>
Welcome to Blockarb,The blockchain arbitrage investment protocol. This is a digital asset investment solution designed to help you extract consistent returns from the cryptocurrency markets. The protocol provides an actively risk managed environment that promotes capital preservation and growth through compounding over time, modest but consistent returns into long term wealth. The protocol relies on dynamic research and technology for adapting to market conditions as it develops to provide a consistent yield which is not affected by market direction or asymmetric risk.
To start earning,kindly explore all the different ways the protocol can be utilised and make a deposit to begin.
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent




@component('mail::message')

Hello {{$name}},<br><br>
@component('mail::panel')
Your withdrawal of ${{number_format($amount, 2)}} was successful and your bitcoin address has been credited.<br>
@endcomponent

Best Regards,<br>
{{ config('app.name') }}
@endcomponent



@component('mail::message')
Hello {{$user->referrer->first_name}},<br><br>

@component('mail::panel')
Your referral, {{$user->first_name." ".$user->last_name}} has made a deposit of ${{number_format($amount, 2)}}.
You have earned a 5% referral bonus of ${{number_format($referralAmount, 2)}}.<br>
@endcomponent


Best Regards,<br>
{{ config('app.name') }}
@endcomponent
