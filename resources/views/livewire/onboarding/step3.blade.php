<div>
    <div class="prose mx-auto">
        <h1 class="pt-14 text-3xl font-bold uppercase text-fit-black">In presenza o da remoto</h1>
        <p class="mt-6 text-fit-black">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad animi at eos minima molestiae quas quidem.
            Corporis praesentium quidem quo reiciendis sit? Accusamus exercitationem harum ipsam nihil officiis quae
            quos!
        </p>
        <div class="mt-6 leading-8 text-fit-black">
            <div class="space-y-4 sm:flex sm:items-center sm:space-x-10 sm:space-y-0">
                <div class="flex items-center">
                    <input wire:model="user_informations.remote" id="remote" name="remote" type="checkbox"
                           class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                    <label for="remote" class="ml-3 block text-sm font-medium leading-6 text-gray-900">Lezioni da remoto</label>
                </div>
                <div class="flex items-center">
                    <input wire:model="user_informations.in_person" id="in-person" name="in-person" type="checkbox"
                           class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                    <label for="in-person" class="ml-3 block text-sm font-medium leading-6 text-gray-900">Lezioni in presenza</label>
                </div>
            </div>
            <x-input-error :messages="$errors->get('user_informations.remote')" class="not-prose mt-2" />
            <x-input-error :messages="$errors->get('user_informations.in_person')" class="not-prose mt-2" />
        </div>
            <div class="not-prose mt-10">
                <x-primary-button wire:click="next" class="!px-14" :disabled="!$disabled">Avanti</x-primary-button>
            </div>
    </div>
</div>
<x-slot:image>
    <img class="aspect-[3/2] w-full bg-gray-50 object-cover lg:absolute lg:inset-0 lg:aspect-auto lg:h-full"
         src="{{$image}}" alt="">
</x-slot:image>