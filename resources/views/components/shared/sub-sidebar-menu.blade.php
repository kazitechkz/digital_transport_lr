<li>
    <a
        x-data="navLink"
        href="{{route($link)}}"
        :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
        class="flex items-center justify-between p-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out hover:pl-4"
    >
        <div class="flex items-center space-x-2">
            <div
                class="h-1.5 w-1.5 rounded-full border border-current opacity-40"
            ></div>
            <span>{{$name}}</span>
        </div>
    </a>
</li>
