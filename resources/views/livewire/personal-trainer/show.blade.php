<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <div class="border-b border-gray-200 pb-5 sm:flex sm:items-center sm:justify-between">
        <div class="flex items-center space-x-4">
            <h2>{{ $user->full_name }}</h2>
            @php
                switch ($user->status) {
                    case 'pending':
                    $badgeClasses = 'bg-fit-magenta';
                    break;
                    case 'approved':
                    $badgeClasses = 'bg-fit-light-blue';
                    break;
                    case 'rejected':
                    $badgeClasses = 'bg-gray-500';
                    break;
                    case 'blocked':
                    $badgeClasses = 'bg-red-500';
                    break;
                }
            @endphp
            <p class="{{ $badgeClasses }} inline-flex items-center rounded-full px-2 py-1 text-xs text-white font-fit-medium">{{ config('fitmatch.profile_statuses.' . $user->status) }}</p>
        </div>
        <div class="mt-3 flex sm:ml-4 sm:mt-0 space-x-4">
            <x-primary-button color="ghost">Contatta</x-primary-button>
            @if($user->status !== 'approved')
                <x-primary-button wire:click="changeStatus('approved')">Approva</x-primary-button>
            @endif
            @if($user->status !== 'rejected')
                <x-primary-button color="magenta" wire:click="changeStatus('rejected')">Nega</x-primary-button>
            @endif
            @if(in_array($user->status, ['approved', 'rejected']))
                <x-primary-button color="red" wire:click="changeStatus('blocked')">Blocca</x-primary-button>
            @endif
        </div>
    </div>
    <div class="py-5">
        <div class="block">
            <nav class="flex space-x-4" aria-label="Tabs">
                @foreach($tabs as $k => $tab)
                    <span wire:click="$set('currentTab', '{{ $k }}')"
                          class="{{ $currentTab === $k ? 'bg-fit-magenta text-white' : 'text-fit-dark-gray cursor-pointer hover:text-fit-magenta' }} rounded-full px-5 py-1 text-xs font-fit-medium">{{ $tab }}</span>
                @endforeach
            </nav>
        </div>
        <div class="my-5">
            @if($currentTab === 'informations')
                <livewire:personal-trainer.partials.informations wire:key="user-informations" :user="$user"/>
            @endif
            @if($currentTab === 'curriculum')
                <livewire:personal-trainer.partials.curriculum wire:key="user-curriculum" :user="$user"/>
            @endif
            @if($currentTab === 'medias')
                <livewire:personal-trainer.partials.medias wire:key="user-medias" :user="$user"/>
            @endif
        </div>
    </div>
</div>
