@props(['item' => null, 'color' => null])
<div
    class="m-1 select-none border border-b-4  rounded-md overflow-hidden w-56 h-40 shrink-0"
    style="border-bottom-color: {{ $color }}"
>
    <div
        class="flex flex-col w-full h-full items-start justify-center bg-white space-y-1.5">
        <div
            class="flex w-full items-center justify-center p-4 border-b">
            <h4 class="text-2xl text-center font-fit-bold truncate">
                Recupero</h4>
        </div>
        <div
            class="flex w-full items-center justify-between flex-1 p-4 divide-x">
            <h4 class="w-1/2 h-full flex items-center justify-center text-2xl font-semibold truncate">{{ $item->quantity->format('i:s') }}</h4>
            <h4 class="w-1/2 h-full flex items-center justify-center text-2xl text-fit-dark-gray font-semibold truncate">{{ $item->executed->format('i:s') }}</h4>
        </div>
    </div>
</div>
