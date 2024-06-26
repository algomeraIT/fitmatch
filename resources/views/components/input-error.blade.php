@props(['messages'])

@if ($messages)
    <div {{ $attributes->merge(['class' => 'text-sm text-left text-red-600 space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <span class="block">{{ $message }}</span>
        @endforeach
    </div>
@endif
