@if($label)
    <div class="form-group">
        <label>{!! $label !!}</label>
        @endif

        <div class="custom-file">
            <input type="file" name="{{ $name }}" {{ $attributes->merge([
                'id' => $id = $attributes->get('id', $name . '-' . uniqid()),
                'class' => 'custom-file-input' . ($errors->has($name) ? ' is-invalid' : '')
            ]) }}>

            <label for="{{ $id }}" class="custom-file-label">
                @php
                    if (!empty($this->model[$name])) {
                        if (is_array($this->model[$name])) {
                            $placeholder = collect($this->model[$name])->map(function ($file) {
                                return $file->getClientOriginalName();
                            })->implode(', ');
                        }
                        else {
                            $placeholder = $this->model[$name]->getClientOriginalName();
                        }
                    }
                @endphp

                {!! $placeholder !!}
            </label>

            @error($name) <span class="invalid-feedback order-last">{{ $message }}</span> @enderror
        </div>

        @if($help)
            <small class="form-text text-muted">{!! $help !!}</small>
        @endif

        @if($label)
    </div>
@endif
