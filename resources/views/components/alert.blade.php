<div {{ $attributes->merge(['class' => 'alert' . ($dismissable ? ' alert-dismissable' : '')]) }}>
    @if($dismissable)
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    @endif

    {!! $content !!}
</div>
