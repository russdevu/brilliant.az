

<!-- Modals -->
<div class="modals_wrapper">
    <div class="overlay"></div>

    <!-- log/reg -->
    <div class="popup modal popup-login">
        <div class="popup-header">
            <ul>
                <li><a href="javascript:void(0);" id="sign-in">Войти</a></li>
                <li><a href="javascript:void(0);" id="register">Зарегистрироваться</a></li>
            </ul>
        </div>
        <div class="popup-content">
            <!-- login -->
            <form method="POST" action="{{ route('login', app()->getLocale()) }}" class="popup-form sign-in">
                @csrf

                <div class="popup-form_group">
                    <label for="email">{{ __('email') }}</label>
                    <input id="email" type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="popup-form_group">
                    <label for="password">{{ __('password') }}</label>
                    <input id="password" type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="popup-form_group">
                    <label for="remember_me" class="label_cont">
                        <input id="remember_me" type="checkbox" name="remember">
                        <span>{{ __('rememberMe') }}</span>
                    </label>
                </div>

                <div class="popup-form_group">
                    <button class="primary-btn">
                        {{ __('login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="form_anchor" id="forgotTrigger">
                            {{ __('forgotPassword') }}
                        </a>
                    @endif
                </div>
            </form>

            <!-- register -->
            <form method="POST" action="{{ route('register', app()->getLocale()) }}" class="popup-form register">
                @csrf

                <div class="popup-form_group">
                    <label>{{ __('name') }}</label>
                    <input type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>

                <div class="popup-form_group">
                    <label>{{ __('email') }}</label>
                    <input type="email" name="email" :value="old('email')" required />
                </div>

                <div class="popup-form_group">
                    <label>{{ __('password') }}</label>
                    <input type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="popup-form_group">
                    <label>{{ __('confirmPassword') }}</label>
                    <input type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>

                <div class="popup-form_group">
                    <button class="primary-btn">
                        {{ __('register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- forgot pass -->
    <div class="popup modal popup-forgot">
        <div class="popup-header">
            <a class="back_arr">
                <svg>
                    <use xlink:href="/sprite.svg#arr_left"></use>
                </svg>
            </a>
            <h4 class="popup-header_title">
                Восстановление
            </h4>
        </div>
        <div class="popup-content">
            <form method="POST" action="{{ route('password.email') }}" class="popup-form sign-in">
                @csrf

                <p>
                    {{-- {{ __('receiveEmailThen') }} --}}
                    Забыли пароль? Ничего страшного! Напишите Вашу почту внизу и Вы получите ссылку на восстановление в ближайшее время!
                </p>

                <div class="popup-form_group">
                    <label>{{ __('email') }}</label>
                    <input type="email" name="email" :value="old('email')" required autofocus />
                </div>

                <div class="popup-form_group">
                    <button class="primary-btn">
                        {{-- {{ __('passResetLink') }} --}}
                        Отправить
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

