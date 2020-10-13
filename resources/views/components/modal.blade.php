<div id="{{ $id }}" class="modal {{ $fade ? 'fade' : '' }}" tabindex="-1" role="dialog" data-backdrop="static" wire:ignore.self>
    <div role="document" {{ $attributes->merge(['class' => 'modal-dialog']) }}>
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{!! $heading !!}</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('Close') }}">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {!! $body !!}
            </div>
            <div class="modal-footer">
                {!! $footer !!}
            </div>
        </div>
    </div>
</div>
