@if($label)
    <div class="form-group">
        <label>{!! $label !!}</label>
        @endif

        <div {{ $attributes->merge(['class' => 'input-group']) }}>
            @if($prepend)
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        {!! $prepend !!}
                    </div>
                </div>
            @endif

            {!! $content !!}

            @if($append)
                <div class="input-group-append">
                    <div class="input-group-text">
                        {!! $append !!}
                    </div>
                </div>
            @endif
        </div>

        @if($label)
    </div>
@endif
