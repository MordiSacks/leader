<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth"
      dir="{{ in_array(app()->getLocale(), ['ar','dv','fa','ha','he','ks','ku','ps','sd','ur','yi']) ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title inertia>{{ config('app.name') }}</title>
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <meta name="routes" content="{{ route('ziggy') }}">
    @vite(['resources/builds/default/js/app.js', "resources/builds/default/js/Pages/{$page['component']}.vue"])
    @inertiaHead
</head>
<body>
@inertia
</body>
</html>
