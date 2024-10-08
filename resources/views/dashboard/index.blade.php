@extends("layout.dashboard")
@section("content")

    <div class="flex items-center justify-between space-x-2 px-[var(--margin-x)] py-5 transition-all duration-[.25s]">
        <div class="flex items-center space-x-1">
            <h3 class="text-lg font-medium text-slate-700 line-clamp-1 dark:text-navy-50">
                Задачи
            </h3>
            <button class="btn hidden size-8 rounded-full p-0 font-medium text-error hover:bg-error/20 focus:bg-error/20 active:bg-error/25 sm:inline-flex">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-4.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                </svg>
            </button>
        </div>
        <label class="relative hidden w-full max-w-[16rem] sm:flex">
            <input class="form-input peer h-8 w-full rounded-lg border border-slate-300 bg-transparent px-3 py-2 pl-9 text-xs+ placeholder:text-slate-400/70 hover:z-10 hover:border-slate-400 focus:z-10 focus:border-primary dark:border-navy-450 dark:hover:border-navy-400 dark:focus:border-accent" placeholder="Search on boards" type="text">
            <span class="pointer-events-none absolute flex h-full w-9 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
              <svg xmlns="http://www.w3.org/2000/svg" class="size-4 transition-colors duration-200" fill="currentColor" viewBox="0 0 24 24">
                <path d="M3.316 13.781l.73-.171-.73.171zm0-5.457l.73.171-.73-.171zm15.473 0l.73-.171-.73.171zm0 5.457l.73.171-.73-.171zm-5.008 5.008l-.171-.73.171.73zm-5.457 0l-.171.73.171-.73zm0-15.473l-.171-.73.171.73zm5.457 0l.171-.73-.171.73zM20.47 21.53a.75.75 0 101.06-1.06l-1.06 1.06zM4.046 13.61a11.198 11.198 0 010-5.115l-1.46-.342a12.698 12.698 0 000 5.8l1.46-.343zm14.013-5.115a11.196 11.196 0 010 5.115l1.46.342a12.698 12.698 0 000-5.8l-1.46.343zm-4.45 9.564a11.196 11.196 0 01-5.114 0l-.342 1.46c1.907.448 3.892.448 5.8 0l-.343-1.46zM8.496 4.046a11.198 11.198 0 015.115 0l.342-1.46a12.698 12.698 0 00-5.8 0l.343 1.46zm0 14.013a5.97 5.97 0 01-4.45-4.45l-1.46.343a7.47 7.47 0 005.568 5.568l.342-1.46zm5.457 1.46a7.47 7.47 0 005.568-5.567l-1.46-.342a5.97 5.97 0 01-4.45 4.45l.342 1.46zM13.61 4.046a5.97 5.97 0 014.45 4.45l1.46-.343a7.47 7.47 0 00-5.568-5.567l-.342 1.46zm-5.457-1.46a7.47 7.47 0 00-5.567 5.567l1.46.342a5.97 5.97 0 014.45-4.45l-.343-1.46zm8.652 15.28l3.665 3.664 1.06-1.06-3.665-3.665-1.06 1.06z"></path>
              </svg>
            </span>
        </label>
        <div class="flex space-x-1">
            <div class="flex -space-x-2">
                <div class="avatar size-6 hover:z-10 sm:h-8 sm:w-8">
                    <img class="rounded-full border-2 border-slate-50 dark:border-navy-900" src="{{asset('assets/images/ava_1.png')}}" alt="avatar">
                </div>
                <div class="avatar size-6 hover:z-10 sm:h-8 sm:w-8">
                    <img class="rounded-full border-2 border-slate-50 dark:border-navy-900" src="{{asset('assets/images/ava_2.png')}}" alt="avatar">
                </div>
                <div class="avatar size-6 hover:z-10 sm:h-8 sm:w-8">
                    <img class="rounded-full border-2 border-slate-50 dark:border-navy-900" src="{{asset('assets/images/ava_3.png')}}" alt="avatar">
                </div>
                <div class="avatar hidden size-6 hover:z-10 sm:inline-flex sm:h-8 sm:w-8">
                    <img class="rounded-full border-2 border-slate-50 dark:border-navy-900" src="{{asset('assets/images/ava_4.png')}}" alt="avatar">
                </div>
                <div class="avatar size-6 sm:h-8 sm:w-8">
                    <div class="is-initial rounded-full border-2 border-slate-50 bg-info text-xs uppercase text-white dark:border-navy-900">
                        +5
                    </div>
                </div>
            </div>
            <button class="btn size-6 rounded-full p-0 font-medium text-info hover:bg-info/20 focus:bg-info/20 active:bg-info/25 sm:h-8 sm:w-8">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-4 sm:h-5 sm:w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path>
                </svg>
            </button>
            <div class="my-1 w-px bg-slate-200 dark:bg-navy-500"></div>
            <div class="flex">
                <button class="btn size-6 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:hidden sm:h-8 sm:w-8">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>

                <button class="btn size-6 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:h-8 sm:w-8">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z"></path>
                    </svg>
                </button>

                <button x-data="{isImportant:true}" @click="isImportant =! isImportant" class="btn hidden size-6 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:inline-flex sm:h-8 sm:w-8">
                    <svg x-show="!isImportant" xmlns="http://www.w3.org/2000/svg" class="size-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                    </svg>
                    <svg x-show="isImportant" xmlns="http://www.w3.org/2000/svg" class="size-5.5 text-primary dark:text-accent" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                    </svg>
                </button>

                <button @click="$dispatch('show-drawer', { drawerId: 'kanban-setting-drawer' })" class="btn size-6 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25 sm:h-8 sm:w-8">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div class="flex h-[calc(100vh-8.5rem)] grow flex-col">
        <div x-init="Sortable.create($el,{
            animation: 200,
            easing: 'cubic-bezier(0, 0, 0.2, 1)',
            delay: 150,
            delayOnTouchOnly: true,
            draggable: '.board-draggable',
            handle: '.board-draggable-handler'
          })" class="kanban-scrollbar grow flex w-full items-start space-x-4 overflow-x-auto overflow-y-hidden px-[var(--margin-x)] transition-all duration-[.25s]">
{{--            In Process--}}
            <div class="board-draggable relative flex max-h-full w-72 shrink-0 flex-col">
                <div class="board-draggable-handler flex items-center justify-between px-0.5 pb-3">
                    <div class="flex items-center space-x-2">
                        <div class="flex size-8 items-center justify-center rounded-lg bg-info/10 text-info">
                            <i class="fa fa-spinner text-base"></i>
                        </div>
                        <h3 class="text-base text-slate-700 dark:text-navy-100">
                             В Работе
                        </h3>
                    </div>

                    <div x-data="usePopper({placement:'bottom-end',offset:4})" @click.outside="isShowPopper &amp;&amp; (isShowPopper = false)" class="inline-flex">
                        <button x-ref="popperRef" @click="isShowPopper = !isShowPopper" class="btn size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                            </svg>
                        </button>

                        <template x-teleport="#x-teleport-target" data-teleport-template="true">
                            <div x-ref="popperRoot" class="popper-root" :class="isShowPopper &amp;&amp; 'show'">
                                <div class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                                    <ul>
                                        <li>
                                            <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Action</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Another Action</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Something else</a>
                                        </li>
                                    </ul>
                                    <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                                    <ul>
                                        <li>
                                            <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Separated Link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
                <div class="is-scrollbar-hidden relative space-y-2.5 overflow-y-auto p-0.5" x-init="Sortable.create($el,{
                          animation: 200,
                          group:'board-cards',
                          easing: 'cubic-bezier(0, 0, 0.2, 1)',
                          direction: 'vertical',
                          delay: 150,
                          delayOnTouchOnly: true,
                        })">
                    <div class="card cursor-pointer shadow-sm">
                        <div class="flex space-x-3 px-2.5 pb-2 pt-1.5">
                            <div class="w-10 shrink-0 py-1 bg-center bg-contain bg-no-repeat h-10 rounded-full my-auto" style='background-image: url("{{asset('assets/images/work.png')}}")'>

                            </div>
                            <div class="flex-1 space-y-2">
                                <p class="font-medium tracking-wide text-slate-600 dark:text-navy-100">
                                    Анализ состояния дорог
                                </p>
                                <div class="flex flex-wrap space-x-1">
                                    <div class="badge space-x-1 bg-slate-150 py-1 px-1.5 text-slate-800 dark:bg-navy-500 dark:text-navy-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        <span> Авг 18</span>
                                    </div>
                                    <div class="badge bg-secondary/10 py-1 px-1.5 text-secondary dark:bg-secondary-light/15 dark:text-secondary-light">
                                        Обновить
                                    </div>
                                    <div class="badge space-x-1 bg-info/10 py-1 px-1.5 text-info dark:bg-info/15">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>3/5</span>
                                    </div>
                                </div>
                                <div class="flex items-end justify-between pt-1">
                                    <div class="flex flex-wrap -space-x-1.5">
                                        <div class="avatar size-5 hover:z-10">
                                            <div class="is-initial rounded-full bg-info text-tiny+ uppercase text-white ring-1 ring-white dark:ring-navy-700">
                                                SD
                                            </div>
                                        </div>

                                        <div class="avatar size-5 hover:z-10">
                                            <img class="rounded-full ring-1 ring-white dark:ring-navy-700" src="{{asset('assets/images/ava_1.png')}}" alt="avatar">
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-2 text-xs text-slate-400 dark:text-navy-300">
                                        <div class="flex items-center space-x-0.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                            </svg>
                                            <span>3</span>
                                        </div>
                                        <div class="flex items-center space-x-0.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                                            </svg>
                                            <span>1</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card cursor-pointer shadow-sm">
                        <div class="flex space-x-3 px-2.5 pb-2 pt-1.5">
                            <div class="w-10 shrink-0 py-1 bg-center bg-contain bg-no-repeat h-10 rounded-full my-auto" style='background-image: url("{{asset('assets/images/work.png')}}")'>

                            </div>
                            <div class="flex-1 space-y-2">
                                <p class="font-medium tracking-wide text-slate-600 dark:text-navy-100">
                                    Обновление базы данных
                                </p>
                                <div class="flex flex-wrap space-x-1">
                                    <div class="badge space-x-1 bg-slate-150 py-1 px-1.5 text-slate-800 dark:bg-navy-500 dark:text-navy-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        <span> Авг 25</span>
                                    </div>
                                    <div class="badge bg-secondary/10 py-1 px-1.5 text-secondary dark:bg-secondary-light/15 dark:text-secondary-light">
                                        Обновить
                                    </div>
                                    <div class="badge space-x-1 bg-info/10 py-1 px-1.5 text-info dark:bg-info/15">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>1/5</span>
                                    </div>
                                </div>
                                <div class="flex items-end justify-between pt-1">
                                    <div class="flex flex-wrap -space-x-1.5">
                                        <div class="avatar size-5 hover:z-10">
                                            <div class="is-initial rounded-full bg-info text-tiny+ uppercase text-white ring-1 ring-white dark:ring-navy-700">
                                                RR
                                            </div>
                                        </div>

                                        <div class="avatar size-5 hover:z-10">
                                            <img class="rounded-full ring-1 ring-white dark:ring-navy-700" src="{{asset('assets/images/ava_2.png')}}" alt="avatar">
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-2 text-xs text-slate-400 dark:text-navy-300">
                                        <div class="flex items-center space-x-0.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                            </svg>
                                            <span>3</span>
                                        </div>
                                        <div class="flex items-center space-x-0.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                                            </svg>
                                            <span>1</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card cursor-pointer shadow-sm">
                        <div class="flex space-x-3 px-2.5 pb-2 pt-1.5">
                            <div class="w-10 shrink-0 py-1 bg-center bg-contain bg-no-repeat h-10 rounded-full my-auto" style='background-image: url("{{asset('assets/images/work.png')}}")'>

                            </div>
                            <div class="flex-1 space-y-2">
                                <p class="font-medium tracking-wide text-slate-600 dark:text-navy-100">
                                    Создание карты дефектов дорог
                                </p>
                                <div class="flex flex-wrap space-x-1">
                                    <div class="badge space-x-1 bg-slate-150 py-1 px-1.5 text-slate-800 dark:bg-navy-500 dark:text-navy-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        <span> Авг 30</span>
                                    </div>
                                    <div class="badge bg-secondary/10 py-1 px-1.5 text-secondary dark:bg-secondary-light/15 dark:text-secondary-light">
                                        Обновить
                                    </div>
                                    <div class="badge space-x-1 bg-info/10 py-1 px-1.5 text-info dark:bg-info/15">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>2/5</span>
                                    </div>
                                </div>
                                <div class="flex items-end justify-between pt-1">
                                    <div class="flex flex-wrap -space-x-1.5">
                                        <div class="avatar size-5 hover:z-10">
                                            <div class="is-initial rounded-full bg-info text-tiny+ uppercase text-white ring-1 ring-white dark:ring-navy-700">
                                                IE
                                            </div>
                                        </div>

                                        <div class="avatar size-5 hover:z-10">
                                            <img class="rounded-full ring-1 ring-white dark:ring-navy-700" src="{{asset('assets/images/ava_3.png')}}" alt="avatar">
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-2 text-xs text-slate-400 dark:text-navy-300">
                                        <div class="flex items-center space-x-0.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                            </svg>
                                            <span>2</span>
                                        </div>
                                        <div class="flex items-center space-x-0.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                                            </svg>
                                            <span>1</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center py-2">
                    <button class="flex items-center justify-center space-x-2 font-medium text-slate-600 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        <span>Новая задача</span>
                    </button>
                </div>
            </div>

{{--            Pending--}}
            <div class="board-draggable relative flex max-h-full w-72 shrink-0 flex-col">
                <div class="board-draggable-handler flex items-center justify-between px-0.5 pb-3">
                    <div class="flex items-center space-x-2">
                        <div class="flex size-8 items-center justify-center rounded-lg bg-warning/10 text-warning">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-base text-slate-700 dark:text-navy-100">
                            В ожидании
                        </h3>
                    </div>

                    <div x-data="usePopper({placement:'bottom-end',offset:4})" @click.outside="isShowPopper &amp;&amp; (isShowPopper = false)" class="inline-flex">
                        <button x-ref="popperRef" @click="isShowPopper = !isShowPopper" class="btn size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                            </svg>
                        </button>

                        <template x-teleport="#x-teleport-target" data-teleport-template="true">
                            <div x-ref="popperRoot" class="popper-root" :class="isShowPopper &amp;&amp; 'show'">
                                <div class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                                    <ul>
                                        <li>
                                            <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Action</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Another Action</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Something else</a>
                                        </li>
                                    </ul>
                                    <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                                    <ul>
                                        <li>
                                            <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Separated Link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
                <div class="is-scrollbar-hidden relative space-y-2.5 overflow-y-auto p-0.5" x-init="Sortable.create($el,{
                        animation: 200,
                        group:'board-cards',
                        easing: 'cubic-bezier(0, 0, 0.2, 1)',
                        direction: 'vertical',
                        delay: 150,
                        delayOnTouchOnly: true,
                      })">
                    <div class="card cursor-pointer shadow-sm">
                        <div class="px-2.5 pb-2 pt-1.5">
                            <div>
                                <div class="flex justify-between">
                                    <p class="font-medium tracking-wide text-slate-600 line-clamp-2 dark:text-navy-100">
                                        Создание отчетов
                                    </p>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="-mr-1.5 size-3.5 shrink-0 text-secondary dark:text-secondary-light" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>

                                <p class="mt-px text-xs text-slate-400 dark:text-navy-300">
                                    Подготовка отчетов о состоянии дорог для представления руководству.
                                </p>
                            </div>

                            <div class="mt-2 flex flex-wrap space-x-1">
                                <div class="badge space-x-1 bg-slate-150 py-1 px-1.5 text-slate-800 dark:bg-navy-500 dark:text-navy-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <span> Авг 26</span>
                                </div>
                            </div>

                            <div class="mt-3 flex items-end justify-between">
                                <div class="flex items-center space-x-2">
                                    <div class="avatar size-6">
                                        <img class="rounded-full" src="{{asset('assets/images/ava_3.png')}}" alt="avatar">
                                    </div>
                                    <p>Gulnara M.</p>
                                </div>
                                <div class="flex items-center space-x-2 text-xs text-slate-400 dark:text-navy-300">
                                    <div class="flex items-center space-x-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                        </svg>
                                        <span>2</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card cursor-pointer shadow-sm">
                        <div class="rounded-lg bg-warning/10 px-2.5 pb-2 pt-1.5">
                            <div>
                                <div class="flex justify-between">
                                    <p class="font-medium tracking-wide text-warning line-clamp-2">
                                        Разработка плана ремонта
                                    </p>
                                </div>
                            </div>
                            <div class="mt-2 flex flex-wrap space-x-1">
                                <div class="badge space-x-1 bg-warning/10 py-1 px-1.5 text-warning dark:bg-warning/15">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <span> Авг 30</span>
                                </div>
                            </div>
                            <div class="mt-3 flex items-end justify-between">
                                <div class="flex flex-wrap -space-x-1.5">
                                    <div class="avatar size-5 hover:z-10">
                                        <div class="is-initial rounded-full bg-success text-tiny+ uppercase text-white ring-1 ring-white dark:ring-navy-700">
                                            EK
                                        </div>
                                    </div>

                                    <div class="avatar size-5 hover:z-10">
                                        <img class="rounded-full ring-1 ring-white dark:ring-navy-700" src="{{asset('assets/images/ava_4.png')}}" alt="avatar">
                                    </div>

                                    <div class="avatar size-5 hover:z-10">
                                        <img class="rounded-full ring-1 ring-white dark:ring-navy-700" src="{{asset('assets/images/ava_3.png')}}" alt="avatar">
                                    </div>
                                </div>
                                <div class="flex items-center space-x-2 text-xs text-slate-400 dark:text-navy-300">
                                    <div class="flex items-center space-x-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                        </svg>
                                        <span>2</span>
                                    </div>
                                    <div class="flex items-center space-x-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                                        </svg>
                                        <span>4</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card cursor-pointer shadow-sm">
                        <div class="flex space-x-3 px-2.5 pb-2 pt-1.5">
                            <div class="w-10 shrink-0 py-1 h-10 bg-center bg-contain bg-no-repeat rounded-full" style='background-image: url("{{asset('assets/images/work.png')}}")'>

                            </div>
                            <div class="flex-1 space-y-2">
                                <div>
                                    <div class="flex justify-between">
                                        <p class="font-medium tracking-wide text-slate-600 line-clamp-2 dark:text-navy-100">
                                            Разработка мобильного приложения для граждан
                                        </p>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="-mr-1.5 size-3.5 shrink-0 text-success" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>

                                    <p class="mt-px text-xs text-slate-400 dark:text-navy-300">
                                        Создание приложения для граждан, чтобы они могли сообщать о проблемах на дорогах.
                                    </p>
                                </div>
                                <div class="flex flex-wrap space-x-1">
                                    <div class="badge space-x-1 bg-slate-150 py-1 px-1.5 text-slate-800 dark:bg-navy-500 dark:text-navy-100">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        <span> Сен 12 </span>
                                    </div>

                                    <div class="badge space-x-1 bg-warning/10 py-1 px-1.5 text-warning dark:bg-warning/15">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                        <span>7/10</span>
                                    </div>
                                </div>
                                <div class="flex items-end justify-between pt-1">
                                    <div class="flex items-center space-x-2">
                                        <div class="avatar size-6">
                                            <img class="rounded-full" src="{{asset('assets/images/ava_2.png')}}" alt="avatar">
                                        </div>
                                        <p>Nurbek A.</p>
                                    </div>

                                    <div class="flex items-center space-x-2 text-xs text-slate-400 dark:text-navy-300">
                                        <div class="flex items-center space-x-0.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                            </svg>
                                            <span>3</span>
                                        </div>
                                        <div class="flex items-center space-x-0.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                                            </svg>
                                            <span>5</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center py-2">
                    <button class="flex items-center justify-center space-x-2 font-medium text-slate-600 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        <span>Новая задача</span>
                    </button>
                </div>
            </div>

{{--            In Review--}}
            <div class="board-draggable relative flex max-h-full w-72 shrink-0 flex-col">
                <div class="board-draggable-handler flex items-center justify-between px-0.5 pb-3">
                    <div class="flex items-center space-x-2">
                        <div class="flex size-8 items-center justify-center rounded-lg bg-secondary/10 text-secondary dark:bg-secondary-light/15 dark:text-secondary-light">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 21h7a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v11m0 5l4.879-4.879m0 0a3 3 0 104.243-4.242 3 3 0 00-4.243 4.242z"></path>
                            </svg>
                        </div>
                        <h3 class="text-base text-slate-700 dark:text-navy-100">
                            На проверке
                        </h3>
                    </div>

                    <div x-data="usePopper({placement:'bottom-end',offset:4})" @click.outside="isShowPopper &amp;&amp; (isShowPopper = false)" class="inline-flex">
                        <button x-ref="popperRef" @click="isShowPopper = !isShowPopper" class="btn size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                            </svg>
                        </button>

                        <template x-teleport="#x-teleport-target" data-teleport-template="true">
                            <div x-ref="popperRoot" class="popper-root" :class="isShowPopper &amp;&amp; 'show'">
                                <div class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                                    <ul>
                                        <li>
                                            <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Action</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Another Action</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Something else</a>
                                        </li>
                                    </ul>
                                    <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                                    <ul>
                                        <li>
                                            <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Separated Link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
                <div class="is-scrollbar-hidden relative space-y-2.5 overflow-y-auto p-0.5" x-init="Sortable.create($el,{
                      animation: 200,
                      group:'board-cards',
                      easing: 'cubic-bezier(0, 0, 0.2, 1)',
                      direction: 'vertical',
                      delay: 150,
                      delayOnTouchOnly: true,
                    })">
                    <div class="card cursor-pointer shadow-sm">
                        <div class="rounded-lg bg-info/10 px-2.5 pb-2 pt-1.5">
                            <div>
                                <div class="flex justify-between">
                                    <p class="font-medium tracking-wide text-info line-clamp-2">
                                        Проверка отчетов
                                    </p>
                                </div>
                            </div>
                            <div class="mt-2 flex flex-wrap space-x-1">
                                <div class="badge space-x-1 bg-info/10 py-1 px-1.5 text-info dark:bg-info/15">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <span> Июль 15</span>
                                </div>
                                <div class="badge bg-primary/10 py-1 px-1.5 text-primary dark:bg-accent-light/15 dark:text-accent-light">
                                    Проверка
                                </div>
                            </div>
                            <div class="mt-3 flex items-end justify-between">
                                <div class="flex flex-wrap -space-x-1.5">
                                    <div class="avatar size-5 hover:z-10">
                                        <div class="is-initial rounded-full bg-secondary text-tiny+ uppercase text-white ring-1 ring-white dark:bg-secondary-light dark:ring-navy-700">
                                            SR
                                        </div>
                                    </div>

                                    <div class="avatar size-5 hover:z-10">
                                        <img class="rounded-full ring-1 ring-white dark:ring-navy-700" src="{{asset('assets/images/ava_2.png')}}" alt="avatar">
                                    </div>

                                    <div class="avatar size-5 hover:z-10">
                                        <img class="rounded-full ring-1 ring-white dark:ring-navy-700" src="{{asset('assets/images/ava_3.png')}}" alt="avatar">
                                    </div>
                                </div>
                                <div class="flex items-center space-x-2 text-xs text-slate-400 dark:text-navy-300">
                                    <div class="flex items-center space-x-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                                        </svg>
                                        <span>6</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card cursor-pointer shadow-sm">
                        <div class="px-2.5 pb-2 pt-1.5">
                            <div>
                                <div class="flex justify-between">
                                    <p class="font-medium tracking-wide text-slate-600 line-clamp-2 dark:text-navy-100">
                                        Аудит безопасности данных
                                    </p>
                                </div>
                            </div>

                            <div class="mt-2 flex flex-wrap space-x-1">
                                <div class="badge space-x-1 bg-slate-150 py-1 px-1.5 text-slate-800 dark:bg-navy-500 dark:text-navy-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <span> Июль 20</span>
                                </div>
                                <div class="badge space-x-1 bg-success/10 py-1 px-1.5 text-success dark:bg-success/15">
                                    <span>Аудит</span>
                                </div>
                            </div>

                            <div class="p-1">
                                <img src="{{asset('assets/images/card-images/category-of-highway.webp')}}" alt="image">
                            </div>

                            <div class="mt-3 flex items-end justify-between">
                                <div class="flex items-center space-x-2">
                                    <div class="avatar size-6">
                                        <img class="rounded-full" src="{{asset('assets/images/ava_1.png')}}" alt="avatar">
                                    </div>
                                    <p>Aday D.</p>
                                </div>
                                <div class="flex items-center space-x-2 text-xs text-slate-400 dark:text-navy-300">
                                    <div class="flex items-center space-x-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                        </svg>
                                        <span>2</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card cursor-pointer shadow-sm">
                        <div class="rounded-lg bg-info/10 px-2.5 pb-2 pt-1.5">
                            <div>
                                <div class="flex justify-between">
                                    <p class="font-medium tracking-wide text-info line-clamp-2">
                                        Анализ обратной связи от граждан
                                    </p>
                                </div>
                            </div>
                            <div class="mt-2 flex flex-wrap space-x-1">
                                <div class="badge space-x-1 bg-info/10 py-1 px-1.5 text-info dark:bg-info/15">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <span> Июль 22</span>
                                </div>
                                <div class="badge bg-primary/10 py-1 px-1.5 text-primary dark:bg-accent-light/15 dark:text-accent-light">
                                    Анализ
                                </div>
                            </div>
                            <div class="mt-3 flex items-end justify-between">
                                <div class="flex flex-wrap -space-x-1.5">
                                    <div class="avatar size-5 hover:z-10">
                                        <div class="is-initial rounded-full bg-secondary text-tiny+ uppercase text-white ring-1 ring-white dark:bg-secondary-light dark:ring-navy-700">
                                            GH
                                        </div>
                                    </div>

                                    <div class="avatar size-5 hover:z-10">
                                        <img class="rounded-full ring-1 ring-white dark:ring-navy-700" src="{{asset('assets/images/ava_2.png')}}" alt="avatar">
                                    </div>

                                    <div class="avatar size-5 hover:z-10">
                                        <img class="rounded-full ring-1 ring-white dark:ring-navy-700" src="{{asset('assets/images/ava_3.png')}}" alt="avatar">
                                    </div>
                                </div>
                                <div class="flex items-center space-x-2 text-xs text-slate-400 dark:text-navy-300">
                                    <div class="flex items-center space-x-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                                        </svg>
                                        <span>6</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center py-2">
                    <button class="flex items-center justify-center space-x-2 font-medium text-slate-600 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        <span>Новая задача</span>
                    </button>
                </div>
            </div>

            <div class="board-draggable relative flex max-h-full w-72 shrink-0 flex-col">
                <div class="board-draggable-handler flex items-center justify-between px-0.5 pb-3">
                    <div class="flex items-center space-x-2">
                        <div class="flex size-8 items-center justify-center rounded-lg bg-success/10 text-success dark:bg-success/15">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path d="M12.5293 18L20.9999 8.40002" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M3 13.2L7.23529 18L17.8235 6" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <h3 class="text-base text-slate-700 dark:text-navy-100">
                            Выполнено
                        </h3>
                    </div>

                    <div x-data="usePopper({placement:'bottom-end',offset:4})" @click.outside="isShowPopper &amp;&amp; (isShowPopper = false)" class="inline-flex">
                        <button x-ref="popperRef" @click="isShowPopper = !isShowPopper" class="btn size-8 rounded-full p-0 hover:bg-slate-300/20 focus:bg-slate-300/20 active:bg-slate-300/25 dark:hover:bg-navy-300/20 dark:focus:bg-navy-300/20 dark:active:bg-navy-300/25">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>
                            </svg>
                        </button>

                        <template x-teleport="#x-teleport-target" data-teleport-template="true">
                            <div x-ref="popperRoot" class="popper-root" :class="isShowPopper &amp;&amp; 'show'">
                                <div class="popper-box rounded-md border border-slate-150 bg-white py-1.5 font-inter dark:border-navy-500 dark:bg-navy-700">
                                    <ul>
                                        <li>
                                            <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Action</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Another Action</a>
                                        </li>
                                        <li>
                                            <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Something else</a>
                                        </li>
                                    </ul>
                                    <div class="my-1 h-px bg-slate-150 dark:bg-navy-500"></div>
                                    <ul>
                                        <li>
                                            <a href="#" class="flex h-8 items-center px-3 pr-8 font-medium tracking-wide outline-none transition-all hover:bg-slate-100 hover:text-slate-800 focus:bg-slate-100 focus:text-slate-800 dark:hover:bg-navy-600 dark:hover:text-navy-100 dark:focus:bg-navy-600 dark:focus:text-navy-100">Separated Link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
                <div class="is-scrollbar-hidden relative space-y-2.5 overflow-y-auto p-0.5" x-init="Sortable.create($el,{
                    animation: 200,
                    group:'board-cards',
                    easing: 'cubic-bezier(0, 0, 0.2, 1)',
                    direction: 'vertical',
                    delay: 150,
                    delayOnTouchOnly: true,
                  })">
                    <div class="card cursor-pointer shadow-sm">
                        <div class="px-2.5 pb-2 pt-1.5">
                            <div>
                                <div class="flex justify-between">
                                    <p class="font-medium tracking-wide text-slate-600 line-clamp-2 dark:text-navy-100">
                                        Внедрение новых сенсоров
                                    </p>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="-mr-1.5 size-3.5 shrink-0 text-warning" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M3 6a3 3 0 013-3h10a1 1 0 01.8 1.6L14.25 8l2.55 3.4A1 1 0 0116 13H6a1 1 0 00-1 1v3a1 1 0 11-2 0V6z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>

                                <p class="mt-px text-xs text-slate-400 dark:text-navy-300">
                                    Установка и калибровка новых сенсоров на дорогах.
                                </p>
                            </div>

                            <div class="mt-2 flex flex-wrap space-x-1">
                                <div class="badge space-x-1 bg-slate-150 py-1 px-1.5 text-slate-800 dark:bg-navy-500 dark:text-navy-100">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                    <span> Июль 05</span>
                                </div>
                            </div>

                            <div class="mt-3 flex items-end justify-between">
                                <div class="flex items-center space-x-2">
                                    <div class="avatar size-6">
                                        <img class="rounded-full" src="{{asset('assets/images/ava_4.png')}}" alt="avatar">
                                    </div>
                                    <p>Jazira J.</p>
                                </div>
                                <div class="flex items-center space-x-2 text-xs text-slate-400 dark:text-navy-300">
                                    <div class="flex items-center space-x-0.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                        </svg>
                                        <span>7</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card cursor-pointer shadow-sm">
                        <div class="flex space-x-3 rounded-lg bg-error/10 px-2.5 pb-2 pt-1.5">
                            <div class="w-10 shrink-0 py-1 h-10 rounded-full bg-center bg-contain bg-no-repeat" style='background-image: url("{{asset('assets/images/work.png')}}")'>

                            </div>
                            <div class="flex-1">
                                <div>
                                    <div class="flex justify-between">
                                        <p class="font-medium tracking-wide text-error line-clamp-2">
                                            Обучение сотрудников
                                        </p>
                                    </div>
                                    <p class="mt-px text-xs text-slate-400 dark:text-navy-300">
                                        Проведение обучающих семинаров по использованию нового оборудования и ПО.
                                    </p>
                                </div>
                                <div class="mt-2 flex flex-wrap space-x-1">
                                    <div class="badge space-x-1 bg-error/10 py-1 px-1.5 text-error dark:bg-error/15">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                        <span> Июнь 17</span>
                                    </div>
                                    <div class="badge bg-warning/10 py-1 px-1.5 text-warning dark:bg-warning/15">
                                        Обучение
                                    </div>
                                </div>
                                <div class="mt-3 flex items-end justify-between">
                                    <div class="flex flex-wrap -space-x-1.5">
                                        <div class="avatar size-5 hover:z-10">
                                            <div class="is-initial rounded-full bg-secondary text-tiny+ uppercase text-white ring-1 ring-white dark:bg-secondary-light dark:ring-navy-700">
                                                DM
                                            </div>
                                        </div>

                                        <div class="avatar size-5 hover:z-10">
                                            <img class="rounded-full ring-1 ring-white dark:ring-navy-700" src="{{asset('assets/images/ava_2.png')}}" alt="avatar">
                                        </div>

                                        <div class="avatar size-5 hover:z-10">
                                            <img class="rounded-full ring-1 ring-white dark:ring-navy-700" src="{{asset('assets/images/ava_3.png')}}" alt="avatar">
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-2 text-xs text-slate-400 dark:text-navy-300">
                                        <div class="flex items-center space-x-0.5">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                                            </svg>
                                            <span>9</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center py-2">
                    <button class="flex items-center justify-center space-x-2 font-medium text-slate-600 hover:text-primary focus:text-primary dark:text-navy-100 dark:hover:text-accent-light dark:focus:text-accent-light">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                        </svg>
                        <span>Новая задача</span>
                    </button>
                </div>
            </div>

            <div class="w-72 shrink-0">
                <button class="btn w-full bg-slate-150 font-medium text-slate-800 hover:bg-slate-200 focus:bg-slate-200 active:bg-slate-200/80 dark:bg-navy-500 dark:text-navy-50 dark:hover:bg-navy-450 dark:focus:bg-navy-450 dark:active:bg-navy-450/90">
                    Новая доска
                </button>
            </div>
        </div>
    </div>

@endsection
