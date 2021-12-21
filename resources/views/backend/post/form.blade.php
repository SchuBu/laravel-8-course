<div class="form-group">
    <label for="email" class="form-label">{{ __('Title') }}</label>
    <input type="text" class="form-input @error('post.title') is-invalid @enderror" name="title"
           wire:model="post.title"
           placeholder="Überschrift ...">
    @error('post.title')
    <div class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </div>
    @enderror
</div>


<div class="form-group">
    <label for="email" class="form-label">{{ __('Body') }}</label>

    <textarea placeholder="Beitragtext ..." wire:model="post.body" class="form-input  @error('post.body') is-invalid @enderror" name="body"></textarea>
    @error('post.body')
    <div class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </div>
    @enderror
</div>
