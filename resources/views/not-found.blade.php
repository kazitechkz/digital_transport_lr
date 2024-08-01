<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Not found</title>
</head>
<body>
    <main class="grid w-full grow grid-cols-1 place-items-center bg-center min-h-100vh" style='background-image: url("{{asset('assets/images/illustrations/ufo-bg.svg')}}")'>
        <div class="max-w-[26rem] text-center">
            <div class="w-full">
                <img class="w-full" x-show="!$store.global.isDarkModeEnabled" src="{{asset('assets/images/illustrations/ufo.svg')}}" alt="image">
                <img class="w-full" x-show="$store.global.isDarkModeEnabled" src="{{asset('assets/images/illustrations/ufo-dark.svg')}}" alt="image" style="display: none;">
            </div>
            <p class="pt-4 text-7xl font-bold text-primary dark:text-accent">
                404
            </p>
            <p class="pt-4 text-xl font-semibold text-slate-800 dark:text-navy-50">
                Oops. This Page Not Found.
            </p>
            <p class="pt-2 text-slate-500 dark:text-navy-200">
                This page you are looking not available
            </p>

            <a href="{{route('dashboard.index')}}" class="btn mt-8 h-11 bg-primary text-base font-medium text-white hover:bg-primary-focus hover:shadow-lg hover:shadow-primary/50 focus:bg-primary-focus focus:shadow-lg focus:shadow-primary/50 active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:hover:shadow-accent/50 dark:focus:bg-accent-focus dark:focus:shadow-accent/50 dark:active:bg-accent/90">
                В главную
            </a>
        </div>
    </main>
</body>
</html>
