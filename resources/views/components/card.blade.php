<div {{ $attributes->merge(['class' => 'card']) }}>
    @if($header)
        <div class="card-header">
            {!! $header !!}
        </div>
    @endif

    @if($image)
        <img src="{{ $image }}" class="card-img-top">
    @endif

    @if($body)
        <div class="card-body">
            {!! $body !!}
        </div>
    @endif

    @if($footer)
        <div class="card-footer">
            {!! $footer !!}
        </div>
    @endif
</div>
