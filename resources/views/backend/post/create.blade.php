<x-layouts.main>
    <div class="flex-1">
        <h1>Neuen Beitrag erstellen</h1>

        <form action="{{route('admin.post.store')}}" method="post">
            @csrf
            <div class="bg-white p-5 shadow">
                <div class="form-group">
                    <label for="email" class="form-label">{{ __('Title') }}</label>
                    <input type="text" class="form-input @error('title') is-invalid @enderror" name="title"
                           value="{{old('title')}}"
                           placeholder="Überschrift ...">
                    @error('title')
                    <div class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                </div>


                <div class="form-group">
                    <label for="email" class="form-label">{{ __('Body') }}</label>

                    <textarea placeholder="Beitragtext ..." class="form-input  @error('body') is-invalid @enderror" name="body">{{ old('body') }}</textarea>
                    @error('body')
                    <div class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Beitrag speichern</button>
            </div>
        </form>


    </div>
</x-layouts.main>
