<li>
    <a
        x-data="navLink"
        href="{{route($link)}}"
        :class="isActive ? 'font-medium text-primary dark:text-accent-light' : 'text-slate-600 hover:text-slate-900 dark:text-navy-200 dark:hover:text-navy-50'"
        class="flex py-2 text-xs+ tracking-wide outline-none transition-colors duration-300 ease-in-out"
    >
        {{$name}}
    </a>
</li>
