<div {{ $attributes }}>
    <div class="d-block d-md-none">
        {{ $models->links('livewire::simple-bootstrap') }}
    </div>

    <div class="d-none d-md-block">
        {{ $models->links('livewire::bootstrap') }}
    </div>
</div>
