@if($label)
    <div class="form-group">
        <label>{!! $label !!}</label>
        @endif

        <select name="{{ $name }}" {{ $attributes->merge(['class' => 'custom-select' . ($errors->has($name) ? ' is-invalid' : '')]) }}>
            <option value="">{{ $placeholder ?? null }}</option>

            @foreach($options as $optionValue => $optionLabel)
                <option value="{{ $optionValue }}">{{ $optionLabel }}</option>
            @endforeach
        </select>

        @error($name) <span class="invalid-feedback order-last">{{ $message }}</span> @enderror

        @if($help)
            <small class="form-text text-muted">{!! $help !!}</small>
        @endif

        @if($label)
    </div>
@endif
