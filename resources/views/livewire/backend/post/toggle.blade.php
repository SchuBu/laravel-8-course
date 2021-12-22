<div>
    <button type="submit" wire:click="toggle" class="btn btn-secondary">
        @if($post->isTrashed())
            <i class="fa fa-toggle-off text-red-700 fa-fw"></i>
        @else
            <i class="fa fa-toggle-on text-green-700 fa-fw"></i>
        @endif
    </button>
</div>
