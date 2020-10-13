<li class="nav-item dropdown">
    {!! $toggle !!}

    <div {{ $attributes->merge(['class' => 'dropdown-menu']) }}>
        {!! $items !!}
    </div>
</li>
