<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>

    <link rel="icon" href="{{ asset('cds/favicon.ico') }}" type="image/vnd.microsoft.icon"/>

    @vite('resources/css/app.css')
    <style>
        @import "{{ asset('cds/css/base.css') }}" layer(base);
    </style>

    <!-- Cornell.edu Typography -->
    <link rel="stylesheet" href="https://use.typekit.net/nwp2wku.css">

    <!-- Icon Fonts -->
    <link rel="stylesheet" href="{{ asset('cds/fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cds/fonts/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" href="{{ asset('cds/fonts/cornell-custom.css') }}">

    @livewireStyles

    <!-- @see https://fluxui.dev/docs/dark-mode#disabling-dark-mode-handling -->
    @fluxAppearance
</head>
<body class="fill" x-data x-effect="document.body.classList.toggle('dark', $flux.dark)">

<x-layouts.header :title="$title ?? (config('app.name'))" :subtitle="$subtitle ?? (config('app.subtitle'))"/>

<main id="main" class="band" tabindex="-1">
{{ $slot }}
</main>

<x-layouts.footer/>

<!-- jQuery and Contributed Components -->
<script src="{{ asset('cds/js/contrib/jquery-3.7.1.min.js') }}"></script>

<!-- CWD Components -->
<script src="{{ asset('cds/js/cds.js') }}"></script>
<script src="{{ asset('cds/js/cds_menus.js') }}"></script>

@livewireScripts
@fluxScripts
</body>
</html>
