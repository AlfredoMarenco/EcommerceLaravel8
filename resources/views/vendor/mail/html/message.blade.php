@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            <img src="{{ asset('images/misc/logo-bajce-vrd.png') }}">
        @endcomponent
    @endslot

    {{-- Body --}}
    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        <center>
            <small>Consulta los terminos y condiciones, asi como nuestras politicas de privacidad</small>
            <br>
            <br>
            <strong style="color:black;">Visita nuestras redes sociales</strong><br>
            <div class="social-icons">
                <a href="https://www.facebook.com/Bajcegrupo/"> <img style="width: 30px;"
                        src="{{ asset('images/icons/facebook.png') }}" alt=""></a>
                <a href="https://twitter.com/grupobajce"> <img style="width: 30px;"
                        src="{{ asset('images/icons/instagram.png') }}" alt=""></a>
                <a href="https://twitter.com/grupobajce"> <img style="width: 30px;"
                        src="{{ asset('/images/icons/signo-de-twitter.png') }}" alt=""></a>
            </div>
        </center>
        @component('mail::footer')
            © {{ date('Y') }} {{ config('app.name') }}. @lang('All rights reserved.')
        @endcomponent
    @endslot
@endcomponent
