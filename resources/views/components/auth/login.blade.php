<form class="login-form" method="POST" action="{{ route('login') }}" id="loginForm">
    @csrf
    <div class="login-top">
        <div>Вхід</div>
        <div class="login-close" onclick="loginFunc()">×</div>
    </div>
    <div class="login-bottom">
        <div class="login-title">Електронна пошта</div>
        <input type="email" name="email" value="{{old('email')}}">
        @error('email')
        <p class="red">{{$message}}</p>
        @enderror
        <div class="login-title">Пароль</div>
        <input type="password" name="password">
        @error('password')
        <p class="red">{{$message}}</p>
        @enderror
        <div class="login__btns">
            <button type="submit">Увійти</button>
            <div onclick="registerForm()">Зареєструватися</div>
        </div>
    </div>
</form>

