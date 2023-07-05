<div>
    <div class="prose mx-auto">
        <div>
            <h1 class="pt-14 mb-2 text-3xl font-bold text-fit-black">Immagini</h1>
        </div>
        <div class="mt-6 leading-8 text-fit-black">
            <div class="grid grid-cols-3 gap-5">
                @foreach($images as $k => $image)
                    <div wire:key="{{ $k }}" wire:click="delete({{$k}})">
                        <img src="{{ $image->temporaryUrl() }}" class="aspect-square">
                    </div>
                @endforeach
            </div>
            <div class="flex items-center space-x-10 mt-10">
                <label for="images"
                       class="px-14 inline-flex items-center px-4 py-2 bg-fit-purple-blue border border-transparent rounded-md font-semibold text-white tracking-widest hover:bg-fit-magenta focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    Aggiungi
                </label>
                <input type="file" class="hidden" id="images" name="images" wire:model="images">
                @if(count($images) > 0)
                    <x-primary-button wire:click="next" class="!px-14">Avanti</x-primary-button>
                @endif
            </div>
        </div>
    </div>
</div>
<x-slot:image>
    <img class="aspect-[3/2] w-full bg-gray-50 object-cover lg:absolute lg:inset-0 lg:aspect-auto lg:h-full"
         src="{{$image}}" alt="">
</x-slot:image>
