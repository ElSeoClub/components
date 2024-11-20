@props(['mandatory' => false,'disabled' => false, 'error' => null])
@php($randomId = (string) Str::uuid())

<div x-data="{ hasError: @json($error && $errors->has($error)) }"
     x-effect="hasError = @json($error && $errors->has($error)); if (hasError) { $el.querySelector('input').classList.add('shake'); setTimeout(() => $el.querySelector('input').classList.remove('shake'), 300); }">
    <div class="relative">
        <label class="block text-sm font-medium mb-1" for="{{$randomId}}">
            {{$slot}}
            @if($mandatory)
                <span
                    class="text-red-500">*</span>
            @endif
        </label>
        <input
            {{ $disabled ? 'disabled' : '' }}
            {!! $attributes->merge([
                'class' => 'form-input w-full' . ($error && $errors->has($error) ? ' !border-red-500' : '')
            ]) !!}
        >
        @error($error)
        <p class="absolute text-red-500 text-xs mt-1 -bottom-5 left-0">{{ $message }}</p>
        @enderror
    </div>
</div>

