<div class="dropdown d-inline-block">
    {!! $toggle !!}

    <div {{ $attributes->merge(['class' => 'dropdown-menu']) }}>
        {!! $items !!}
    </div>
</div>
