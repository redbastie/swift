@if($label)
    <div class="form-group">
        <label>{!! $label !!}</label>
        @endif

        @foreach($options as $radioValue => $radioLabel)
            <div class="custom-control custom-radio {{ $inline ? 'custom-control-inline' : '' }}">
                <input type="radio" id="{{ $id = $name . '-' . uniqid() }}" name="{{ $name }}" value="{{ $radioValue }}"
                    {{ $attributes->merge(['class' => 'custom-control-input' . ($errors->has($name) ? ' is-invalid' : '')]) }}>

                <label for="{{ $id }}" class="custom-control-label">{{ $radioLabel }}</label>
            </div>
        @endforeach

        @error($name) <span class="invalid-feedback order-last d-block">{{ $message }}</span> @enderror

        @if($help)
            <small class="form-text text-muted">{!! $help !!}</small>
        @endif

        @if($label)
    </div>
@endif
