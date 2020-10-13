<div class="progress">
    <div style="width: {{ $percent }}%" {{ $attributes->merge(['class' => 'progress-bar']) }}>
        {!! $label !!}
    </div>
</div>
