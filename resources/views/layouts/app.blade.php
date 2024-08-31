<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dom.')</title>
    <meta name="description" content="@yield('description', 'Some random website.')">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @vite('resources/css/app.css')
    @vite('resources/views/components/navigations/root-navigation.css')
    @stack('styles')
</head>

<body>
    <x-navigations.root-navigation></x-navigations.root-navigation>
    @yield('content')
    <footer class="flex text-neutral-500 justify-end container mx-auto p-4">
        © @php echo date("Y"); @endphp Dom.
    </footer>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    @vite('resources/views/components/navigations/root-navigation.js')
    @stack('scripts')
</body>

</html>
