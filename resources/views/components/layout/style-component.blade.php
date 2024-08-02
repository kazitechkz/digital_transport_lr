<script src="https://kit.fontawesome.com/5c3a1bdab7.js" crossorigin="anonymous"></script>
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet"
/>
@livewireStyles
@vite(['resources/css/app.css', 'resources/js/app.js'])
<script>
    /**
     * THIS SCRIPT REQUIRED FOR PREVENT FLICKERING IN SOME BROWSERS
     */
    localStorage.getItem("_x_darkMode_on") === "true" &&
    document.documentElement.classList.add("dark");
</script>
<style>
    [x-cloak] { display: none !important; }
</style>
<link rel="stylesheet" href="{{asset("assets/css/custom.css")}}" />
<link rel="stylesheet" href="{{asset("assets/css/leaflet.css")}}" />
<link rel="stylesheet" href="{{asset("assets/css/geoman.css")}}" />
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@stack('css')
