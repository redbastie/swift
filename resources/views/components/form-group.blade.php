<div {{ $attributes->merge(['class' => 'form-group']) }}>
    @if($label)
        <label>{!! $label !!}</label>
    @endif

    {!! $content !!}
</div>
