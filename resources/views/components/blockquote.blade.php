<blockquote {{ $attributes }}>
    {!! $content !!}

    @if($footer)
        <footer class="blockquote-footer">
            {!! $footer !!}
        </footer>
    @endif
</blockquote>
