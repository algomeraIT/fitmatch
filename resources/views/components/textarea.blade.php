@props(['disabled' => false, 'required' => false, 'name', 'label' => false, 'hint' => false, 'append' => false, 'prepend' => false, 'iconColor' => 'text-gray-800'])
@php
	$n = $attributes->wire('model')->value() ?: $name;
	$slug = $attributes->wire('model')->value() ?: $n;
	$inputClass = 'appearance-none w-full shadow-[0_0_8px_1px_rgb(0,0,0,0.08)] border-0 rounded-xl sm:text-sm focus:ring focus:ring-opacity-50 disabled:opacity-50';
@endphp
@error($slug)
@php
	$inputClass .= ' pr-11 border-red-300 focus:outline-none text-red-900 placeholder-red-300 focus:ring-red-500 focus:border-red-500';
@endphp
@else
	@php
		$inputClass .= ' focus:ring-fit-light-blue';
	@endphp
	@enderror
	@if($prepend)
		@php
			$inputClass .= ' pl-11';
		@endphp
	@endif
	@if($append)
		@php
			$inputClass .= ' pr-11';
		@endphp
	@endif

	<div>
		@if($label || isset($action))
			<div class="flex items-center justify-between">
				@if ($label)
					<x-input-label :for="$slug" :required="$required">{{ $label }}</x-input-label>
				@endif
				@isset($action)
					{{ $action }}
				@endisset
			</div>
		@endif
		<div class="relative @if($label || isset($action)) mt-1.5 @endif">
			@if($prepend)
				<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
					<x-icon name="{{$prepend}}" class="{{ $iconColor }} w-5 h-5 text-fit-black shrink-0"></x-icon>
				</div>
			@endif
                <textarea
                    {{ $attributes->merge(['class' => $inputClass]) }}
                    {{ $disabled ? 'disabled' : '' }}
                    name="{{ $slug }}"
                    id="{{ $slug }}"
                    {{ $required ? 'required' : '' }}
                ></textarea>
			@error($slug)
			<div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
				<x-icon
						name="heroicon-o-x-mark"
						class="w-5 h-5 shrink-0 text-fit-magenta"
				></x-icon>
			</div>
			@else
				@if($append)
					<div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
						<x-icon name="{{$append}}" class="{{ $iconColor }} w-5 h-5 text-fit-black shrink-0"></x-icon>
					</div>
				@endif
				@enderror
		</div>
		@if($hint)
			<p class="mt-1 text-xs text-gray-500">{{ $hint }}</p>
		@endif
		<x-input-error :messages="$errors->get($slug)" class="mt-2"></x-input-error>
	</div>
