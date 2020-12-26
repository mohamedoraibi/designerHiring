<!-- Login modal -->
<div class="modal fade" id="loginForm" tabindex="-1" aria-labelledby="ModalLabel" style="padding-top: 32px;"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="login-modal modal-content">
            <div class="modal-header" style="border-bottom: solid;">
                <h2 class="modal-title" id="ModalLabel" style="margin-left: 10%;">Sign in</h2>
                <button type="button" class="btn-close" style="background-color: #cfb48d; margin-right: 10px;"
                        data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body center-modal">

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}" class="px-5">
                    @csrf
                    <div class="form-row">
                        <div class="col-lg-12">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" placeholder="E-mail Address"
                                   class="form-control my-3 p-2">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-lg-12">
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" placeholder="Password"
                                   class="form-control my-3 p-2">
                        </div>
                    </div>
                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                            <span class="ml-2 text-sm text-gray-200">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-200 hover:text-yellow-500"
                           href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                    <div class="form-row">
                        <div class="col-lg-12">
                            <button type="submit" class="btn1 mt-3 mb-5">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
