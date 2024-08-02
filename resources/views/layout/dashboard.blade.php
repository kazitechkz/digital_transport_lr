<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Meta tags  -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
        name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />

    <title>Digital Road Passport - Цифровая паспортизация дорог</title>
    <link rel="icon" type="image/png" href="{{asset('favicon.ico')}}" />


    <x-layout.style-component/>

</head>

<body x-data class="is-header-blur is-sidebar-open" x-bind="$store.global.documentBody">
<!-- App preloader-->
<div class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900">
    <div class="app-preloader-inner relative inline-block h-48 w-48"></div>
</div>

<!-- Page Wrapper -->
<div
    id="root"
    class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900"
    x-cloak
>
    <!-- Sidebar -->
    <x-layout-sidebar-menu />

    <!-- App Header Wrapper-->
    <x-layout.navbar-menu />


    <!-- Main Content Wrapper -->
    <main class="main-content w-full pb-8">
        @yield("content")
    </main>
</div>
<!--
        This is a place for Alpine.js Teleport feature
        @see https://alpinejs.dev/directives/teleport
      -->
<div id="x-teleport-target"></div>
<x-layout.script-component/>
</body>
</html>
