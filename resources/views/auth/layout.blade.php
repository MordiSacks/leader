<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--    <title>@hasSection('title') @yield('title') | @endif{{ config('app.name', 'Laravel') }}</title>--}}
    <title>@hasSection('title')
            @yield('title') |
        @endif{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/winbox@0.2.6/dist/css/themes/modern.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            border: none;
            box-sizing: border-box;
            font: inherit;
            color: inherit;
        }

        :-webkit-autofill,
        :-webkit-autofill:hover,
        :-webkit-autofill:focus,
        :-webkit-autofill:active {
            transition: background-color 9999s ease-in-out 0s;
            -webkit-text-fill-color: #fff;
        }

        html {
            height: 100%;
            font-size: 16px;
            font-family: "Segoe UI", Arial, sans-serif;
        }

        .wrapper {
            width: 100%;
            min-height: 100vh;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1rem;
            background: linear-gradient(45deg, #4c8ffc, #dd43aa);
        }

        .box {
            width: 30rem;
            max-width: 97%;
            padding: 3.5rem;
            border-radius: 0.6rem;
            background: linear-gradient(180deg, #4c8ffc, #dd43aa);
            box-shadow: 0 0 15px #dd43aa;
            color: #fff;
            overflow: hidden;
        }

        .logo {
            width: 10rem;
            display: block;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
            font-size: 2.5rem;
            padding: 1rem 0;
        }

        .in {
            position: relative;
            margin-bottom: 2rem;
            padding-bottom: .5rem;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: .5rem;
        }

        .in:before {
            content: '';
            position: absolute;
            left: 0;
            width: 100%;
            bottom: 0;
            height: 0.125rem;
            background: rgba(255, 255, 255, .25);
        }

        .in.invalid:before {
            background: rgba(255, 0, 0, 0.25);
        }

        .in:after {
            content: '';
            position: absolute;
            left: 0;
            width: 0;
            bottom: 0;
            height: 0.125rem;
            background: #fff;
            transition: width .2s ease-in-out;
        }

        .in.invalid:after {
            background: rgba(255, 0, 0, 1);
        }

        .in input {
            display: block;
            width: calc(100% - 1.75rem - .5rem);
            padding: 0.3rem 0;
            background: transparent;
            line-height: 1.1;
        }

        .in svg {
            width: 1.75rem;
            transition: transform .2s ease-in-out;
        }

        .in:focus-within:after {
            width: 100%;
        }

        .in:focus-within svg {
            transform: translateY(-20%);
        }

        .in input:focus {
            border-color: transparent !important;
            outline: transparent;
        }

        .in input::placeholder {
            color: #fff;
            opacity: 1;
        }

        .in [role="alert"] {
            width: 100%;
            flex: 0 0 100%;
            font-size: .9rem;
            line-height: .9rem;
            background-color: #ffb2b2;
            color: red;
            border-radius: .4rem;
            padding: .25rem .5rem;
        }

        button {
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            padding: .5rem 1rem;
            min-width: 7rem;
            cursor: pointer;
            background: #4c8ffc;
            transition: background-color .2s ease-in-out;
        }

        button:hover {
            background: #2a63c1;
        }

        label {
            display: flex;
            gap: .5rem;
            margin-bottom: 1rem;
        }

        input[type='checkbox'] {
            margin-inline-start: .25rem;
            transform: scale(1.5);
        }
    </style>
    @stack('head')
</head>
<body>
@stack('body-start')
<div class="wrapper">
    <div class="box">
        <svg viewBox="0 0 190.87 126.74" class="logo" fill="currentColor">
            <path
                d="M15.69 0h23.47c8.63 0 15.67 6.99 15.67 15.67v66.57c0 8.63-7.05 15.62-15.67 15.62H15.69C7.01 97.86 0 90.87 0 82.24V15.67C0 6.99 7.01 0 15.69 0zm30.16 16.54H10.68v5.77H25.6v61.88h5.41V22.31h14.85v-5.77z"></path>
            <path
                d="M67.96 69.74V24.36h5.36v6.94c1.38-3.22 2.61-5.3 3.79-6.33 1.17-1.08 2.44-1.58 3.83-1.58 2.03 0 4.08.81 6.13 2.44l-2.1 7.1c-1.47-1.08-2.91-1.58-4.33-1.58-1.33 0-2.5.5-3.52 1.53-1.02.97-1.74 2.41-2.19 4.19-.66 2.71-.97 5.72-.97 8.99v23.69h-5.99zm22.66-53.87V7.15h5.99v8.72h-5.99zm0 53.87V24.36h5.99v45.38h-5.99zm15.06 17.42v-62.8h5.43v5.97c1.28-2.3 2.75-4.03 4.33-5.21 1.64-1.11 3.58-1.73 5.88-1.73 3 0 5.66 1.02 7.96 3 2.3 2 4.03 4.8 5.21 8.38 1.17 3.68 1.73 7.62 1.73 11.95 0 4.64-.66 8.79-1.94 12.51-1.28 3.72-3.16 6.54-5.61 8.52-2.46 1.94-5.05 2.97-7.76 2.97-2 0-3.77-.5-5.36-1.64-1.58-1.08-2.86-2.39-3.88-4.08v22.16H105.68zm5.43-39.83c0 5.82.92 10.12 2.75 12.92 1.83 2.75 4.03 4.19 6.63 4.19 2.66 0 4.91-1.49 6.79-4.35 1.89-2.91 2.8-7.35 2.8-13.37 0-5.82-.86-10.1-2.75-12.96-1.83-2.91-4.04-4.3-6.6-4.3-2.5 0-4.75 1.47-6.69 4.55-1.98 3.06-2.95 7.49-2.95 13.32zm32.21 22.41V7.16h5.93v62.58h-5.93zm39.22-14.7 6.17 1.08c-.97 4.58-2.75 8.21-5.36 10.77-2.66 2.55-6.02 3.83-10.05 3.83-5.16 0-9.26-2.03-12.26-6.13-3.02-4.08-4.49-9.8-4.49-17.15 0-7.6 1.53-13.53 4.55-17.72 3.06-4.24 6.99-6.33 11.84-6.33 4.69 0 8.52 2.08 11.48 6.18 3 4.13 4.49 9.96 4.49 17.4 0 .47 0 1.13-.05 2.05h-26.19c.2 5 1.28 8.77 3.25 11.43 1.94 2.66 4.4 3.99 7.35 3.99 2.16 0 4.04-.77 5.57-2.25 1.58-1.49 2.75-3.88 3.68-7.15zm-19.56-12.29h19.59c-.25-3.83-1.01-6.7-2.25-8.59-1.89-2.95-4.33-4.44-7.35-4.44-2.75 0-5.05 1.19-6.88 3.52-1.83 2.35-2.91 5.52-3.11 9.51zM.51 126.51a.49.49 0 0 1-.36-.14.497.497 0 0 1-.14-.37v-15.08c0-.15.05-.28.14-.37a.49.49 0 0 1 .36-.14h.43c.15 0 .27.05.36.14.09.09.14.21.14.37V126c0 .15-.04.28-.14.37a.49.49 0 0 1-.36.14H.51zm6.12 0a.49.49 0 0 1-.36-.14.497.497 0 0 1-.14-.37v-10.95c0-.15.04-.28.14-.37a.49.49 0 0 1 .36-.14h.39c.15 0 .27.05.36.14.09.09.14.21.14.37v1.08c.46-.6.98-1.05 1.56-1.36.58-.31 1.34-.46 2.27-.46 1.49 0 2.64.48 3.44 1.44.81.96 1.21 2.2 1.21 3.71v6.53c0 .15-.05.28-.14.37a.49.49 0 0 1-.36.14h-.39a.49.49 0 0 1-.36-.14.497.497 0 0 1-.14-.37v-6.42c0-1.24-.3-2.21-.9-2.9-.6-.69-1.46-1.04-2.59-1.04-1.09 0-1.97.35-2.62 1.05-.65.7-.98 1.66-.98 2.89v6.42c0 .15-.05.28-.14.37a.49.49 0 0 1-.36.14h-.39zm17.44 0c-1.12 0-1.92-.34-2.39-1.02-.47-.68-.71-1.62-.71-2.82v-6.78h-1.78a.49.49 0 0 1-.36-.14.497.497 0 0 1-.14-.37v-.32c0-.15.05-.28.14-.37a.49.49 0 0 1 .36-.14h1.78v-3.86c0-.15.05-.28.14-.37a.49.49 0 0 1 .36-.14h.39c.15 0 .27.05.36.14.09.09.14.21.14.37v3.86h2.83c.15 0 .27.05.36.14.09.09.14.21.14.37v.32c0 .15-.05.28-.14.37a.49.49 0 0 1-.36.14h-2.83v6.69c0 .86.14 1.51.42 1.94.28.44.75.66 1.4.66h1.23c.15 0 .27.05.36.14.09.09.14.21.14.37v.32c0 .15-.04.28-.14.37a.49.49 0 0 1-.36.14h-1.34zm9.28.23c-1.44 0-2.61-.48-3.49-1.44-.88-.96-1.38-2.24-1.5-3.85l-.02-.92.02-.92c.12-1.59.62-2.87 1.49-3.84.87-.97 2.04-1.45 3.5-1.45 1.58 0 2.81.53 3.7 1.59.89 1.06 1.33 2.51 1.33 4.35v.35c0 .15-.05.28-.15.37-.1.09-.22.14-.38.14h-8.11v.23c.03.72.19 1.39.49 2.01.3.62.71 1.12 1.24 1.49.53.38 1.15.56 1.87.56.84 0 1.51-.17 2.04-.49.52-.33.9-.66 1.13-1 .14-.18.24-.3.31-.34.07-.05.19-.07.38-.07h.36c.14 0 .25.04.34.11.09.08.14.18.14.3 0 .32-.2.71-.6 1.16-.4.45-.96.84-1.68 1.17-.71.33-1.52.49-2.42.49zm3.65-6.92v-.09c0-1.18-.33-2.15-.99-2.92-.66-.77-1.55-1.15-2.65-1.15-1.11 0-1.99.38-2.63 1.15-.64.77-.97 1.74-.97 2.92v.09h7.25zm5.59 6.69a.49.49 0 0 1-.36-.14.497.497 0 0 1-.14-.37v-10.92c0-.15.05-.28.14-.38.09-.1.21-.15.36-.15h.36c.15 0 .28.05.38.15.1.1.15.23.15.38v1.06c.55-1.06 1.58-1.59 3.1-1.59h.84c.15 0 .27.05.37.14.09.09.14.21.14.37v.32c0 .15-.05.28-.14.37-.09.09-.21.14-.37.14h-.98c-.91 0-1.63.27-2.16.81-.53.54-.8 1.26-.8 2.18v7.13c0 .15-.05.28-.15.37-.1.09-.22.14-.38.14h-.36zm8.62 0a.49.49 0 0 1-.36-.14.497.497 0 0 1-.14-.37v-10.95c0-.15.04-.28.14-.37a.49.49 0 0 1 .36-.14h.39c.15 0 .27.05.36.14.09.09.14.21.14.37v1.08c.46-.6.98-1.05 1.56-1.36.58-.31 1.34-.46 2.27-.46 1.49 0 2.64.48 3.44 1.44.81.96 1.21 2.2 1.21 3.71v6.53c0 .15-.05.28-.14.37a.49.49 0 0 1-.36.14h-.39a.49.49 0 0 1-.36-.14.497.497 0 0 1-.14-.37v-6.42c0-1.24-.3-2.21-.9-2.9-.6-.69-1.46-1.04-2.59-1.04-1.09 0-1.97.35-2.62 1.05-.65.7-.98 1.66-.98 2.89v6.42c0 .15-.05.28-.14.37a.49.49 0 0 1-.36.14h-.39zm18.03.23c-1.44 0-2.61-.48-3.49-1.44-.88-.96-1.38-2.24-1.5-3.85l-.02-.92.02-.92c.12-1.59.62-2.87 1.49-3.84.87-.97 2.04-1.45 3.5-1.45 1.58 0 2.81.53 3.7 1.59.89 1.06 1.33 2.51 1.33 4.35v.35c0 .15-.05.28-.15.37-.1.09-.22.14-.38.14h-8.11v.23c.03.72.19 1.39.49 2.01.3.62.71 1.12 1.24 1.49.53.38 1.15.56 1.87.56.83 0 1.52-.17 2.04-.49.52-.33.9-.66 1.13-1 .14-.18.24-.3.31-.34.07-.05.19-.07.38-.07h.36c.14 0 .25.04.34.11.09.08.14.18.14.3 0 .32-.2.71-.6 1.16-.4.45-.96.84-1.68 1.17-.71.33-1.52.49-2.42.49zm3.65-6.92v-.09c0-1.18-.33-2.15-.99-2.92-.66-.77-1.55-1.15-2.65-1.15-1.11 0-1.99.38-2.63 1.15-.65.77-.97 1.74-.97 2.92v.09h7.25zm8.99 6.69c-1.12 0-1.92-.34-2.39-1.02-.47-.68-.71-1.62-.71-2.82v-6.78H77a.49.49 0 0 1-.36-.14.497.497 0 0 1-.14-.37v-.32c0-.15.05-.28.14-.37a.49.49 0 0 1 .36-.14h1.78v-3.86c0-.15.05-.28.14-.37a.49.49 0 0 1 .36-.14h.39c.15 0 .27.05.36.14.09.09.14.21.14.37v3.86H83c.15 0 .27.05.36.14.09.09.14.21.14.37v.32c0 .15-.05.28-.14.37a.49.49 0 0 1-.36.14h-2.83v6.69c0 .86.14 1.51.42 1.94.28.44.75.66 1.4.66h1.23c.15 0 .27.05.36.14.09.09.14.21.14.37v.32c0 .15-.04.28-.14.37a.49.49 0 0 1-.36.14h-1.34zm15.85.23c-1.18 0-2.21-.2-3.09-.59-.87-.39-1.54-.9-2.01-1.53-.46-.63-.71-1.3-.74-2.02 0-.12.05-.23.14-.32.09-.09.21-.14.34-.14h.46c.27 0 .44.15.5.46.11.74.52 1.38 1.25 1.93s1.78.83 3.14.83c1.44 0 2.52-.26 3.22-.79.71-.53 1.06-1.27 1.06-2.22 0-.58-.17-1.06-.51-1.44-.34-.38-.84-.7-1.49-.99-.65-.28-1.64-.64-2.96-1.07-1.17-.38-2.09-.76-2.75-1.13-.66-.37-1.15-.82-1.47-1.36-.32-.54-.48-1.22-.48-2.05 0-.78.21-1.49.63-2.12.42-.63 1.02-1.12 1.81-1.48.79-.36 1.73-.54 2.83-.54 1.12 0 2.09.2 2.89.61.81.41 1.41.92 1.82 1.54.41.62.63 1.25.66 1.87 0 .12-.04.23-.13.32-.08.09-.2.14-.35.14h-.46c-.11 0-.21-.03-.32-.1-.11-.07-.17-.19-.18-.36-.09-.77-.5-1.4-1.22-1.9s-1.63-.75-2.72-.75c-1.17 0-2.1.23-2.79.69-.69.46-1.04 1.15-1.04 2.07 0 .6.16 1.09.47 1.48.31.39.78.73 1.4 1.01.62.28 1.54.62 2.76 1.02 1.25.4 2.22.78 2.92 1.15.7.37 1.23.81 1.58 1.33.36.52.53 1.2.53 2.02 0 1.38-.51 2.46-1.53 3.23s-2.42 1.16-4.19 1.16zm13.91 0c-1.58 0-2.81-.49-3.68-1.46-.87-.97-1.33-2.23-1.38-3.78l-.02-.97.02-.97c.05-1.55.51-2.81 1.38-3.78.87-.97 2.1-1.46 3.68-1.46s2.81.49 3.68 1.46c.87.97 1.33 2.23 1.38 3.78.02.15.02.48.02.97s-.01.81-.02.97c-.05 1.55-.51 2.81-1.38 3.78-.87.97-2.1 1.46-3.68 1.46zm0-1.33c1.08 0 1.95-.35 2.61-1.05.66-.7 1.01-1.69 1.06-2.98.02-.15.02-.44.02-.85s-.01-.7-.02-.85c-.05-1.29-.4-2.28-1.06-2.98-.66-.7-1.53-1.05-2.61-1.05-1.08 0-1.95.35-2.61 1.05-.66.7-1.01 1.69-1.06 2.98l-.02.85.02.85c.05 1.29.4 2.28 1.06 2.98.66.7 1.53 1.05 2.61 1.05zm9.42 1.1a.53.53 0 0 1-.37-.14.497.497 0 0 1-.14-.37v-15.31c0-.15.05-.28.14-.37.09-.09.21-.14.37-.14h.39c.15 0 .27.05.36.14.09.09.14.21.14.37V126c0 .15-.05.28-.14.37a.49.49 0 0 1-.36.14h-.39zm9.74.23c-1.49 0-2.62-.48-3.39-1.43s-1.16-2.19-1.16-3.72v-6.53c0-.15.04-.28.14-.37a.49.49 0 0 1 .36-.14h.39c.15 0 .27.05.36.14.09.09.14.21.14.37v6.42c0 2.62 1.13 3.93 3.4 3.93 1.09 0 1.96-.35 2.61-1.05.65-.7.97-1.66.97-2.89v-6.42c0-.15.05-.28.14-.37a.49.49 0 0 1 .36-.14h.39c.15 0 .27.05.37.14.09.09.14.21.14.37V126c0 .15-.05.28-.14.37-.09.09-.21.14-.37.14h-.39a.49.49 0 0 1-.36-.14.497.497 0 0 1-.14-.37v-1.08c-.46.6-.98 1.05-1.56 1.36-.58.31-1.33.46-2.24.46zm13.57-.23c-1.12 0-1.92-.34-2.39-1.02-.47-.68-.71-1.62-.71-2.82v-6.78h-1.78a.49.49 0 0 1-.36-.14.497.497 0 0 1-.14-.37v-.32c0-.15.05-.28.14-.37a.49.49 0 0 1 .36-.14h1.78v-3.86c0-.15.05-.28.14-.37a.49.49 0 0 1 .36-.14h.39c.15 0 .27.05.36.14.09.09.14.21.14.37v3.86h2.83c.15 0 .27.05.36.14.09.09.14.21.14.37v.32c0 .15-.05.28-.14.37a.49.49 0 0 1-.36.14h-2.83v6.69c0 .86.14 1.51.42 1.94.28.44.75.66 1.4.66h1.23c.15 0 .27.05.36.14.09.09.14.21.14.37v.32c0 .15-.05.28-.14.37a.49.49 0 0 1-.36.14h-1.34zm5.14-14.42a.49.49 0 0 1-.36-.14.497.497 0 0 1-.14-.37v-.87c0-.15.05-.28.14-.38.09-.1.21-.15.36-.15h.87c.15 0 .28.05.38.15.1.1.15.23.15.38v.87c0 .15-.05.28-.15.37-.1.09-.22.14-.38.14h-.87zm.25 14.42a.49.49 0 0 1-.36-.14.497.497 0 0 1-.14-.37v-10.95c0-.15.05-.28.14-.37a.49.49 0 0 1 .36-.14h.39c.15 0 .27.05.36.14.09.09.14.21.14.37V126c0 .15-.05.28-.14.37a.49.49 0 0 1-.36.14h-.39zm9.79.23c-1.58 0-2.81-.49-3.68-1.46-.87-.97-1.33-2.23-1.38-3.78l-.02-.97.02-.97c.04-1.55.5-2.81 1.38-3.78.87-.97 2.1-1.46 3.68-1.46s2.81.49 3.68 1.46c.87.97 1.33 2.23 1.38 3.78.02.15.02.48.02.97s-.01.81-.02.97c-.05 1.55-.51 2.81-1.38 3.78-.87.97-2.1 1.46-3.68 1.46zm0-1.33c1.08 0 1.95-.35 2.61-1.05.66-.7 1.01-1.69 1.06-2.98.02-.15.02-.44.02-.85s-.01-.7-.02-.85c-.05-1.29-.4-2.28-1.06-2.98-.66-.7-1.53-1.05-2.61-1.05-1.08 0-1.95.35-2.61 1.05-.66.7-1.01 1.69-1.06 2.98l-.02.85.02.85c.04 1.29.4 2.28 1.06 2.98.66.7 1.53 1.05 2.61 1.05zm9.4 1.1a.49.49 0 0 1-.36-.14.497.497 0 0 1-.14-.37v-10.95c0-.15.05-.28.14-.37a.49.49 0 0 1 .36-.14h.39c.15 0 .27.05.36.14.09.09.14.21.14.37v1.08c.46-.6.98-1.05 1.56-1.36.58-.31 1.34-.46 2.27-.46 1.49 0 2.64.48 3.44 1.44.81.96 1.21 2.2 1.21 3.71v6.53c0 .15-.05.28-.14.37a.49.49 0 0 1-.36.14h-.39a.49.49 0 0 1-.36-.14.497.497 0 0 1-.14-.37v-6.42c0-1.24-.3-2.21-.9-2.9-.6-.69-1.46-1.04-2.59-1.04-1.09 0-1.97.35-2.62 1.05-.65.7-.98 1.66-.98 2.89v6.42c0 .15-.05.28-.14.37a.49.49 0 0 1-.36.14h-.39zm17.4.23c-.99 0-1.82-.17-2.49-.51-.68-.34-1.19-.72-1.53-1.15-.34-.43-.51-.77-.51-1.03 0-.14.05-.25.16-.33.11-.08.22-.13.34-.13h.34a.5.5 0 0 1 .26.06c.07.04.15.12.24.24.33.48.74.85 1.22 1.11.48.27 1.14.4 1.97.4.94 0 1.7-.18 2.28-.54.58-.36.87-.88.87-1.55 0-.41-.12-.75-.35-1.01-.24-.26-.61-.49-1.14-.68-.52-.19-1.3-.41-2.34-.66-1.35-.31-2.27-.73-2.77-1.26-.49-.54-.74-1.22-.74-2.05 0-.57.16-1.1.47-1.61.31-.51.78-.92 1.39-1.24.62-.32 1.36-.48 2.22-.48.91 0 1.68.16 2.31.47.63.31 1.1.68 1.41 1.09.31.41.47.75.47 1.01a.4.4 0 0 1-.15.33.56.56 0 0 1-.35.13h-.34c-.21 0-.38-.1-.5-.3-.3-.46-.65-.81-1.04-1.05s-.99-.36-1.81-.36c-.88 0-1.55.18-2.01.55-.46.37-.68.85-.68 1.45 0 .37.09.67.27.92.18.24.52.47 1.03.68.5.21 1.23.42 2.19.63 1.41.32 2.41.75 2.98 1.29.58.54.87 1.25.87 2.14 0 .63-.17 1.2-.52 1.72s-.87.94-1.55 1.24c-.68.31-1.5.46-2.46.46z"></path>
        </svg>
        <h1>@yield('title')</h1>
        @yield('content')
    </div>
</div>
<script>
    (function (d) {
        d.querySelectorAll('form').forEach(f => f.addEventListener('submit', evt => {
            if (!f.reportValidity()) return;
            evt.preventDefault();

            // clear errors
            f.querySelectorAll('.in.invalid').forEach(el => {
                el.classList.remove('invalid');
                el.querySelectorAll('[role="alert"]').forEach(i => i.remove());
            });

            fetch('', {
                method: (f.method || 'get').toLowerCase(),
                headers: {Accept: 'application/json'},
                body: new FormData(f),
            }).then(r => {
                if(r.status === 204) document.location.href = '{{ route('dashboard') }}';
                return r.json();
            }).then(r => {
                if (r.errors) {
                    Object.keys(r.errors).forEach(k => {
                        f.querySelectorAll('[name="' + k + '"]').forEach(ei => {
                            ei.closest('.in').classList.add('invalid');
                            let div = d.createElement('div');
                            div.setAttribute('role', 'alert');
                            div.innerText = r.errors[k][0];
                            ei.parentNode.insertBefore(div, ei.nextSibling);
                        });
                    });
                    return;
                }

                if (r.message) {
                    let ok = '@lang('Ok')';

                    window.closeMsg = function () {
                        window.msg.close();
                        document.dispatchEvent(new CustomEvent('msg:closed'));
                    };

                    window.msg = new WinBox("Message", {
                        modal: true,
                        class: 'modern',
                        html: `
<div style="display: flex; flex-direction: column; justify-content: space-between;height: 100%; padding: 2rem">
    <div style="flex: 1; display: flex;justify-content: center; align-items: center;">
        <p style="text-align: center; font-size: 2rem;">${r.message}</p>
    </div>
    <div style="display: flex;justify-content: center; align-items: center; gap:1rem;">
        <button type="button" onclick="closeMsg()">${ok}</button>
    </div>
</div>
                        `,
                    });
                }

                f.reset();
            });
        }));
    })(document);
</script>
<script src="https://cdn.jsdelivr.net/npm/winbox@0.2.6/dist/winbox.bundle.min.js"></script>
@stack('body-end')
</body>
</html>
