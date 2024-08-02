@livewireScriptConfig
<script>
    window.addEventListener("DOMContentLoaded", () => Livewire.start());
</script>
<script src="{{asset('assets/js/leaflet.js')}}"></script>
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/geoman.js')}}"></script>
<script src="{{asset('assets/js/dgis.js')}}"></script>
<script src="{{asset('assets/js/jquery.inputmask.min.js')}}"></script>
<script src="http://maps.api.2gis.ru/1.0" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function(){
        // Mask for integer numbers
        $(".numberInput").inputmask({
            alias: "numeric",
            allowMinus: true,
            digits: 0,
            rightAlign: false
        });

        // Mask for float numbers
        $(".floatInput").inputmask({
            alias: "decimal",
            allowMinus: true,
            digits: 5, // Set the number of decimal places as needed
            rightAlign: false
        });
    });

</script>
@stack('js')
