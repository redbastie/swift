@if($responsive)
    <div class="table-responsive">
        @endif

        <table {{ $attributes->merge(['class' => 'table']) }}>
            {!! $content !!}
        </table>

        @if($responsive)
    </div>
@endif
