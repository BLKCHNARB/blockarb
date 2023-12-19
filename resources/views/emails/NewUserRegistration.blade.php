@component('mail::message')
Hello {{$user['first_name']}},<br><br>

@component('mail::panel')

Welcome to Blockarb,The blockchain arbitrage investment protocol. <br><br> This is a digital asset investment solution designed to help you extract consistent returns from the cryptocurrency markets. <br><br> The protocol provides an actively risk managed environment that promotes capital preservation and growth through compounding over time, modest but consistent returns into long term wealth. The protocol relies on dynamic research and technology for adapting to market conditions as it develops to provide a consistent yield which is not affected by market direction or asymmetric risk. <br><br>
To start earning,kindly explore all the different ways the protocol can be utilised and make a deposit to begin.
@endcomponent


Best Regards,<br>
{{ config('app.name') }}
@endcomponent
