<form action="{{ route('register') }}" class="login-form reg" method="POST" id="registerForm">
    @csrf
    <div class="login-top">
        <div>Реєстрація</div>
        <div class="login-close" onclick="registerForm()">×</div>
    </div>
    <div class="login-bottom">
        <div>Ім'я</div>
        <input type="text" name="name" value="{{old('name')}}">
        <div>Фамілія</div>
        <input type="text" name="surname" value="{{old('surname')}}">
        <div>Електронна пошта</div>
        <input type="text" name="email" value="{{old('email')}}">
        <div>Пароль</div>
        <input type="password" name="password">
        <div class="login__btns">
            <button>Зареєструватися</button>
        </div>
    </div>
</form>

