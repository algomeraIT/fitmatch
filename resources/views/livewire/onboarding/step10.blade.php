<div>
    <div class="prose prose-sm mx-auto">
        <div>
            <h1 class="pt-14 mb-2">Immagini e video</h1>
        </div>
        <div class="mt-6">
            <div class="grid grid-cols-3 gap-5">
                @foreach($images as $k => $image)
                    <div wire:key="image-{{ $k }}" class="group relative">
                        <div wire:click="deleteImage({{$k}})" class="absolute top-8 right-2 bg-fit-purple-blue p-1.5 cursor-pointer hover:bg-fit-magenta">
                            <x-heroicon-o-x-mark class="h-5 w-5 text-white"></x-heroicon-o-x-mark>
                        </div>
                        <img src="{{ $image->temporaryUrl() }}" class="aspect-square">
                    </div>
                @endforeach
                    @foreach($videos as $k => $video)
                        <div wire:key="video-{{ $k }}" class="group relative">
                            <div wire:click="deleteVideo({{$k}})" class="absolute top-8 right-2 bg-fit-purple-blue p-1.5 cursor-pointer hover:bg-fit-magenta">
                                <x-heroicon-o-x-mark class="h-5 w-5 text-white"></x-heroicon-o-x-mark>
                            </div>
                            <img src="https://placehold.co/193x193" class="aspect-square">
                        </div>
                    @endforeach
            </div>
            <div class="flex items-center space-x-5 mt-10">
                <div>
                    <label for="images"
                           class="text-sm inline-flex items-center px-5 py-1.5 bg-fit-purple-blue border border-transparent rounded-md font-semibold text-white tracking-widest cursor-pointer hover:bg-fit-magenta focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        Aggiungi immagine
                    </label>
                    <input type="file" class="hidden" id="images" name="images" wire:model="images">
                </div>
                <div>
                    <label for="videos"
                           class="text-sm inline-flex items-center px-5 py-1.5 bg-fit-purple-blue border border-transparent rounded-md font-semibold text-white tracking-widest cursor-pointer hover:bg-fit-magenta focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        Aggiungi video
                    </label>
                    <input type="file" class="hidden" id="videos" name="videos" wire:model="videos">
                </div>
                @if(count($images) > 0)
                    <x-primary-button wire:click="next">Avanti</x-primary-button>
                @endif
            </div>
        </div>
    </div>
</div>
<x-slot:image>
    <img class="aspect-[3/2] w-full bg-gray-50 object-cover lg:absolute lg:inset-0 lg:aspect-auto lg:h-full"
         src="{{$image}}" alt="">
</x-slot:image>
