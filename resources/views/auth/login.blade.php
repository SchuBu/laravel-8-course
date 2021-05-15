<x-layouts.main>
    <div class="flex-1 flex justify-center items-center">
        <div class="justify-content-center w-full">
                <div class="card bg-gray-50 shadow-lg max-w-md mx-auto">
                    <div class="card-header py-1 px-3 bg-blue-700 text-white">{{ __('Login') }}</div>

                    <div class="card-body border border-gray-300 p-5">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row my-5">
                                <label for="email" class="col-md-4 col-form-label text-md-right text-sm font-bold text-gray-500 py-1 inline-block">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="w-full bg-transparent focus:outline-none focus:bg-yellow-100 text-gray-700 border-l border-b border-gray-300 p-2 @error('email') is-invalid border-red-700 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <div class="invalid-feedback text-xs text-red-700 mt-2" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row my-5">
                                <label for="password" class="col-md-4 col-form-label text-md-right text-sm font-bold text-gray-500 py-1 inline-block">{{ __('Password') }}</label>

                                <div class="col-md-6 ">
                                    <input id="password" type="password" class="w-full bg-transparent focus:outline-none focus:bg-yellow-100 text-gray-700 border-l border-b border-gray-300 p-2 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                          {{--  <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>--}}

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4 text-center my-5">

                                    <button type="submit" class="btn btn-primary bg-blue-800 text-white py-1 px-2 ">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <div class="my-5">
                                        <a class="btn btn-link text-blue-700 text-xs hover:underline" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</x-layouts.main>
