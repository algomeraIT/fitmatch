<div class="select-none border border-b-4 border-b-fit-magenta rounded-md overflow-hidden w-80">
    <div class="w-full flex items-center justify-between bg-fit-lighter-gray p-4">
        <span class="text-xs font-bold text-fit-magenta">???</span>
        <div class="flex space-x-2">
            <x-heroicon-o-play-circle
                class="h-4 w-4 hover:text-fit-magenta hover:cursor-pointer"></x-heroicon-o-play-circle>
            <x-heroicon-o-heart class="h-4 w-4 hover:text-fit-magenta hover:cursor-pointer"></x-heroicon-o-heart>
        </div>
    </div>
    <div class="w-full items-center justify-center bg-white">
        <div class="p-4">
            <p class="text-xs text-fit-black">{{ $item->area->name }}/{{ $item->zone->name }}</p>
            <h3 class="truncate my-1.5">{{ $item->name }}</h3>
            <p class="text-sm text-fit-dark-gray line-clamp-2">{{ $item->description }}</p>
        </div>
        <div class="border-t w-full flex items-center justify-between p-4">
            <x-heroicon-o-queue-list
                class="h-4 w-4 hover:text-fit-magenta hover:cursor-pointer"></x-heroicon-o-queue-list>
            <div class="flex space-x-2">
                <x-heroicon-o-trash
                    wire:click="delete"
                    class="h-4 w-4 hover:text-fit-magenta hover:cursor-pointer"></x-heroicon-o-trash>
                <x-heroicon-o-square-2-stack
                    class="h-4 w-4 hover:text-fit-magenta hover:cursor-pointer"></x-heroicon-o-square-2-stack>
            </div>
        </div>
    </div>
</div>