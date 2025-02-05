@vite(['resources/css/app.css', 'resources/js/app.js'])

<div class="mb-4 text-muted">
    {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
</div>

<form method="POST" action="{{ route('password.confirm') }}">
    @csrf

    <!-- Password -->
    <div class="mb-3">
        <label for="password" class="form-label">{{ __('Password') }}</label>
        <input id="password" class="form-control mt-1 w-100"
               type="password"
               name="password"
               required autocomplete="current-password" />
        <div class="text-danger mt-2">@error('password') {{ $message }} @enderror</div>
    </div>

    <div class="d-flex justify-content-end mt-4">
        <button type="submit" class="btn btn-primary">
            {{ __('Confirm') }}
        </button>
    </div>
</form>
