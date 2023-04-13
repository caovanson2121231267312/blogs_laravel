<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @yield('title')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite(['resources/js/client.js'])
    @vite('resources/css/client.css')
    @livewireStyles
</head>

<body>

    @include('client.layouts.navbar')
    @include('client.layouts.header')


    <div class="pcoded-main-container">
        <div class="pcoded-wrapper container">
            <div class="pcoded-content-body">
                <div class="pcoded-inner-content">
                    <div class="main-body">
                        <div class="page-wrapper">
                            @yield('body')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('client.layouts.footer')
    @livewireScripts

</body>

</html>
