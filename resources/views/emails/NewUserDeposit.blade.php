@component('mail::layout')

@slot('header')
@component('mail::header', ['url' => config('app.url')])
    <img src="{{asset("logo-1.png")}}" alt="">
@endcomponent
@endslot

{{-- @component('mail::message') --}}

{{-- Hello {{$name}},<br><br> --}}
Hello {{$name}},<br><br>
@component('mail::panel')
{{-- Your deposit of ${{number_format($amount, 2)}} has been received.<br> --}}
Your deposit of {{number_format($amount, 2)}} {{$token}} is now available in your BlockArb account. Log in to check your balance.<br>

@component('mail::button', ['url' => route("login")])
    Visit your dashboard
@endcomponent

@component('mail::subcopy')
Don’t recognize this activity? Please reset your password and contact customer support immediately. <br><br>
This is an automated message, please do not reply. 

Stay connected
@component('mail::links')
    
@endcomponent

@endcomponent

@endcomponent

{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Best Regards,<br>
{{ config('app.name') }}
{{-- @endcomponent --}}

@slot('footer')
        @component('mail::footer')
            &copy; 2022 {{config('app.name')}}. All rights reserved
        @endcomponent
    @endslot
    
@endcomponent
