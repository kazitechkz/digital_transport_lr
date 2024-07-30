<div class="card p-4 sm:p-5">
    <div class="avatar h-12 w-12">
        <div class="is-initial rounded-full {{$bg_icon}} text-white">
            <i class="{{$icon}} text-xl"></i>
        </div>
    </div>
    <h2
        class="mt-5 text-base font-medium tracking-wide text-slate-700 line-clamp-1 dark:text-navy-100"
    >
        {{$app_name}}
    </h2>
    <p class="mt-1">
        {{$app_description}}
    </p>
    <div class="mt-5 pb-1">
        <a
            href="{{route($route)}}"
            class="border-b border-dashed border-current pb-0.5 font-medium text-primary outline-none transition-colors duration-300 hover:text-primary/70 focus:text-primary/70 dark:text-accent-light dark:hover:text-accent-light/70 dark:focus:text-accent-light/70"
        >
            {{$route_name}}
        </a>
    </div>
</div>
