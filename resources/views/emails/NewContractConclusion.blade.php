@component('mail::message')
    Hello {{ $investment->user->first_name }},<br><br>

    @component('mail::panel')
        Your Investment has come to and end. Below is a summary of your investment. Capital - {{ $investment->amount }}, Profit
        - {{ $investment->profit }}, Total - {{$investment->capital + $investment->profit}} <br>
    @endcomponent


    Best Regards,<br>
    {{ config('app.name') }}
@endcomponent
