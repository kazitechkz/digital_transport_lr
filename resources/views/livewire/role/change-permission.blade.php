<div class="is-scrollbar-hidden min-w-full overflow-x-auto">
    <table class="w-full text-left">
        <thead>
        <tr class="border border-transparent border-b-slate-200 dark:border-b-navy-500">
            <th class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5">#</th>
            <th class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5">
                Наименование
            </th>
            <th class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5">
                MANAGEMENT
            </th>
            <th class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5">
                READ
            </th>
            <th class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5">
                CREATE
            </th>
            <th class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5">
                UPDATE
            </th>
            <th class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5">
                DELETE
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($groupedPermissions as $key => $value)

            <tr class="border border-transparent border-b-slate-200 dark:border-b-navy-500">
                <td class="whitespace-nowrap px-4 py-3 sm:px-5">{{$loop->iteration}}</td>
                <td class="whitespace-nowrap px-4 py-3 sm:px-5">{{$key}}</td>
                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    @if(in_array('management', $value))
                        <x-checkbox name="management" wire:click="updatePermission({{array_search('management', $value)}})" :checked="$this->checkHasPermission(array_search('management', $value))" />
                    @endif
                </td>
                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    @if(in_array('read', $value))
                        <x-checkbox :checked="$this->checkHasPermission(array_search('read', $value))" name="read" wire:click="updatePermission({{array_search('read', $value)}})"/>
                    @endif
                </td>
                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    @if(in_array('create', $value))
                        <x-checkbox :checked="$this->checkHasPermission(array_search('create', $value))" name="create" wire:click="updatePermission({{array_search('create', $value)}})"/>
                    @endif
                </td>
                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    @if(in_array('update', $value))
                        <x-checkbox :checked="$this->checkHasPermission(array_search('update', $value))" name="update" wire:click="updatePermission({{array_search('update', $value)}})"/>
                    @endif
                </td>
                <td class="whitespace-nowrap px-4 py-3 sm:px-5">
                    @if(in_array('delete', $value))
                        <x-checkbox :checked="$this->checkHasPermission(array_search('delete', $value))" name="delete" wire:click="updatePermission({{array_search('delete', $value)}})"/>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
