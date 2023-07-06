<div>
    <div class="prose mx-auto">
        @if(auth()->user()->accepted === 0)
            <h1 class="pt-14 text-3xl font-bold uppercase text-fit-black">La tua richiesta non è andata a buon fine</h1>
            <p class="mt-6 text-fit-black">
                Si è verificato un errore con la tua richiesta, prova a reinserire i tuoi dati, in caso di errore
                contattaci a <a href="mailto:subscription@fitmatch.com">subscription@fitmatch.com</a> per supporto o
                chiarimenti riguardo l'iscrizione.
            </p>
            <div class="not-prose mt-10">
                <x-primary-button wire:click="next" class="!px-14">Riprova</x-primary-button>
            </div>
        @elseif(auth()->user()->accepted === null)
            <h1 class="pt-14 text-3xl font-bold uppercase text-fit-black">La tua richiesta è stata inviata con
                successo</h1>
            <p class="mt-6 text-fit-black">
                La richiesta è stata inviata ai nostri esperti, riceverai a breve una email di conferma di approvazione,
                in caso contrario puoi contattarci a
                <a href="mailto:subscription@fitmatch.com">subscription@fitmatch.com</a> per supporto o chiarimenti
                riguardo l'iscrizione.
            </p>
            <div class="not-prose mt-10">
                <x-primary-button wire:click="next" class="!px-14">Torna alla Home</x-primary-button>
            </div>
        @endif
    </div>
</div>
<x-slot:image>
    <img class="aspect-[3/2] w-full bg-gray-50 object-cover lg:absolute lg:inset-0 lg:aspect-auto lg:h-full"
         src="{{$image}}" alt="">
</x-slot:image>