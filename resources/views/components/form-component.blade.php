<form
    method="{{$method != "get" ? "post" : "get"}}"
    action="{{route($route,$parameters)}}"
    enctype="{{$enctype}}"
    id="{{$elementId}}"
>
    @csrf
    @method(strtoupper($method))
    {{--    Error Block--}}
    <div class="form-group">
        <x-errors/>
    </div>
    {{--    Error Block--}}
    {{ $slot }}
    <div class="col-md-12 text-right my-2">
        @if($isSend)
            <button type="submit"
                    class="btn space-x-2 bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                <span>Отправить</span>
            </button>
        @endif
        @if($isClear)
            <button type="reset"
                    class="btn space-x-2 bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                <span>Очистить</span>
            </button>
        @endif
    </div>
</form>
