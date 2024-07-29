<li x-data="accordionItem('{{$elementId}}')">
    <a
        :class="expanded ? 'text-slate-800 font-semibold dark:text-navy-50' : 'text-slate-600 dark:text-navy-200  hover:text-slate-800  dark:hover:text-navy-50'"
        @click="expanded = !expanded"
        class="flex items-center justify-between py-2 text-xs+ tracking-wide outline-none transition-[color,padding-left] duration-300 ease-in-out"
        href="javascript:void(0);"
    >
        <span>{{$name}}</span>
        <svg
            :class="expanded && 'rotate-90'"
            xmlns="http://www.w3.org/2000/svg"
            class="h-4 w-4 text-slate-400 transition-transform ease-in-out"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M9 5l7 7-7 7"
            />
        </svg>
    </a>
    <ul x-collapse x-show="expanded">
        {{$slot}}
    </ul>
</li>
