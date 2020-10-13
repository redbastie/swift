@if($label)
    <div class="form-group">
        <label>{!! $label !!}</label>
        @endif

        <textarea name="{{ $name }}" {{ $attributes->merge(['class' => 'form-control' . ($errors->has($name) ? ' is-invalid' : '')]) }}></textarea>

        @error($name) <span class="invalid-feedback order-last">{{ $message }}</span> @enderror

        @if($help)
            <small class="form-text text-muted">{!! $help !!}</small>
        @endif

        @if($label)
    </div>
@endif
