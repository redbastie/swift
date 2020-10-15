@if($label)
    <div class="form-group">
        <label>{!! $label !!}</label>
        @endif

        <div class="custom-control custom-{{ $type }} {{ $inline ? 'custom-control-inline' : '' }}">
            <input type="checkbox" name="{{ $name }}" {{ $attributes->merge([
                'id' => $id = $attributes->get('id', $name . '-' . uniqid()),
                'class' => 'custom-control-input' . ($errors->has($name) ? ' is-invalid' : '')
            ]) }}>

            <label for="{{ $id }}" class="custom-control-label">{!! $checkboxLabel ?? Str::title(str_replace('_', ' ', Str::snake($name))) !!}</label>

            @error($name) <span class="invalid-feedback order-last">{{ $message }}</span> @enderror
        </div>

        @if($help)
            <small class="form-text text-muted">{!! $help !!}</small>
        @endif

        @if($label)
    </div>
@endif
