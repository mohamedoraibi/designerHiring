<!-- Welcome Text -->
<div class="welcome-text">
    <h3 style="font-size: 26px;">Let's create your account!</h3>
    <span>Already have an account? <a href="{{ url('/login') }}">Log In!</a></span>
</div>
<!-- Form -->
<form method="POST" action="{{ route('register') }}" id="register-account-form">
    @csrf
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="mdi mdi-block-helper mr-2"></i>
            <ul>
                <div class="notification error closeable">
                    <strong>Whoops!</strong> There is a problem with the input.<br><br>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    <a class="close"></a>
                </div>
            </ul>
        </div>
    @endif
    <span>Chose your account type <b>Designer</b> or <b>Project owner</b> or <b>Both</b> ? </span>
    <!-- Account Type -->
    <div class="account-type">
        <div>
            <input type="checkbox" value="1" name="is_designer" id="is_designer"
                   class="account-type-radio"/>
            <label for="is_designer" class="ripple-effect-dark"><i
                    class="icon-material-outline-account-circle"></i> Designer</label>
        </div>
        <div>
            <input type="checkbox" value="1" name="is_project_owner" id="is_project_owner"
                   class="account-type-radio"/>
            <label for="is_project_owner" class="ripple-effect-dark"><i
                    class="icon-material-outline-account-circle"></i> Project Owner</label>
        </div>

    </div>


    <div class="input-with-icon-left">
        <i class="icon-line-awesome-user"></i>
        <input type="text" class="input-text with-border" value="{{ old('name') }}" name="name"
               id="name" placeholder="Full Name" required/>
    </div>

    <div class="input-with-icon-left">
        <i class="icon-material-outline-account-circle"></i>
        <input type="text" class="input-text with-border" value="{{ old('username') }}" name="username"
               id="username" placeholder="Username" required/>
    </div>

    <div class="input-with-icon-left">
        <i class="icon-line-awesome-birthday-cake"></i>
        <input type="date" class="input-text with-border" value="{{ old('birth') }}" name="birth"
               id="birth" placeholder="Date of Birth" required/>
    </div>
    <div class="input-with-icon-left">
        <i class="icon-material-baseline-mail-outline"></i>
        <input type="email" class="input-text with-border" value="{{ old('email') }}" name="email"
               id="email" placeholder="Email Address" required/>
    </div>

    <div class="input-with-icon-left" title="Should be at least 8 characters long"
         data-tippy-placement="bottom">
        <i class="icon-material-outline-lock"></i>
        <input type="password" class="input-text with-border" name="password"
               id="password" placeholder="Password" required/>
    </div>

    <div class="input-with-icon-left">
        <i class="icon-material-outline-lock"></i>
        <input type="password" class="input-text with-border" name="password_confirmation"
               id="password_confirmation" placeholder="Repeat Password" required/>
    </div>

    <!-- Button -->
    <button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit"
            form="register-account-form">Register <i
            class="icon-material-outline-arrow-right-alt"></i>
    </button>
</form>

<!-- Social Login -->
<div class="social-login-separator"><span>or</span></div>
<div class="social-login-buttons">
    <button class="facebook-login ripple-effect"><i class="icon-brand-facebook-f"></i> Register via
        Facebook
    </button>
    <button class="google-login ripple-effect"><i class="icon-brand-google-plus-g"></i> Register via
        Google+
    </button>
</div>
