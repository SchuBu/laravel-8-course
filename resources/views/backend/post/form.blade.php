<div class="form-group">
    <label for="email" class="form-label">{{ __('Title') }}</label>
    <input type="text" class="form-input @error('title') is-invalid @enderror" name="title"
           value="{{ old('title') ?? $post->title ?? ''}}"
           placeholder="Überschrift ...">
    @error('title')
    <div class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </div>
    @enderror
</div>


<div class="form-group">
    <label for="email" class="form-label">{{ __('Body') }}</label>

    <textarea placeholder="Beitragtext ..." class="form-input  @error('body') is-invalid @enderror" name="body">{{ old('body') ?? $post->body ?? '' }}</textarea>
    @error('body')
    <div class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </div>
    @enderror
</div>

<button type="submit" class="btn btn-primary">Beitrag speichern</button>

