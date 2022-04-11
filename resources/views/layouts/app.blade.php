<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{config('app.name')}}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Styling -->
    @include('partials.styling')
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">

    <!-- Navbar -->
    @include('partials.navbar')

    <!-- Sidebar Menu -->
    @include('partials.sidebar')

    <!-- Footer -->
    @include('partials.footer')

</body>

<!-- Script -->
@include('partials.script')
@stack('scripts')

</html>
