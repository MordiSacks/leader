@extends('auth.layout')

@section('title', __('Login'))

@section('content')
    <form method="post">
        @csrf
        <div class="in">
            <svg viewBox="0 0 32 32" fill="currentColor"><path d="M4 28q0 .832.576 1.44t1.44.576h20q.8 0 1.408-.576T28 28q0-1.44-.672-2.912t-1.76-2.624-2.496-2.144-2.88-1.504q1.76-1.088 2.784-2.912T24 12v-1.984q0-3.328-2.336-5.664T16 2.016t-5.664 2.336T8 10.016V12q0 2.112 1.024 3.904t2.784 2.912q-1.504.544-2.88 1.504t-2.496 2.144-1.76 2.624T4 28z"/></svg>
            <input type="email" name="email" dir="ltr" value="{{ old('email') }}"
                   aria-label="@lang('E-Mail Address')" placeholder="@lang('E-Mail Address')"
                   required autocomplete="email" autofocus>
        </div>

        <div class="in">
            <svg viewBox="0 0 64 64" fill="currentColor"><path d="M52 24h-4v-8c0-8.836-7.164-16-16-16S16 7.164 16 16v8h-4c-2.211 0-4 1.789-4 4v32c0 2.211 1.789 4 4 4h40c2.211 0 4-1.789 4-4V28c0-2.211-1.789-4-4-4zM32 48c-2.211 0-4-1.789-4-4s1.789-4 4-4 4 1.789 4 4-1.789 4-4 4zm8-24H24v-8a8 8 0 0 1 16 0v8z"/></svg>
            <input type="password" name="password"
                   aria-label="@lang('Password')" placeholder="@lang('Password')"
                   required autocomplete="current-password">
        </div>

        <label>
            <input type="checkbox" name="remember">
            <span>@lang('Remember me')</span>
        </label>

        <button type="submit" style="margin-top: 2rem;">
            @lang('Login')
        </button>

        <div style="margin-top: 5rem;text-align: center;">
            <a href="{{ route('password.request') }}">
                @lang('Forgot Your Password?')
            </a>
        </div>
    </form>
@endsection
