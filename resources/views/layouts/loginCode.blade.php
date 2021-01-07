<!-- Welcome Text -->
<div class="welcome-text">
    <h3>We're glad to see you again!</h3>
    <span>Don't have an account? <a href="/register">Sign Up!</a></span>
</div>
@if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
@endif
@if(View::hasSection('page-error'))
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="mdi mdi-block-helper mr-2"></i>
            <ul>
                <div class="notification error closeable">
                    <strong>Whoops!</strong> There is a problem with the input.<br><br>
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                    <a class="close"></a>
                </div>
            </ul>
        </div>
    @endif
@endif
<!-- Form -->
<form method="POST" action="{{ route('login') }}" id="login-form">
    @csrf
    <div class="input-with-icon-left">
        <i class="icon-material-baseline-mail-outline"></i>
        <input type="text" class="input-text with-border" name="email" id="email"
               placeholder="Email Address" value="{{ old('email') }}" required/>
    </div>

    <div class="input-with-icon-left">
        <i class="icon-material-outline-lock"></i>
        <input type="password" class="input-text with-border" name="password" id="password"
               placeholder="Password" required/>
    </div>
    <label for="remember_me" class="flex items-center">
        <input id="remember_me" type="checkbox" class="form-checkbox default-checkbox-height" name="remember">
        <span class="ml-2 text-sm text-gray-200">{{ __('Remember me') }}</span>
    </label>
    <a href="#" class="forgot-password">Forgot Password?</a>
</form>

<!-- Button -->
<button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit"
        form="login-form">Log In <i class="icon-material-outline-arrow-right-alt"></i></button>

<!-- Social Login -->
<div class="social-login-separator"><span>or</span></div>
<div class="social-login-buttons">
    <button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Log In via
        Facebook
    </button>
    <button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Log In via
        Google+
    </button>
</div>
