<template>
    <form class="login-form" method="POST" action="/login" id="loginForm">
        <input type="hidden" name="_token" :value="csrf">
        <div class="login-top">
            <div>Вхід</div>
            <div class="login-close" @click="closeForm()">×</div>
        </div>
        <div class="login-bottom">
            <div class="login-title">Електронна пошта</div>
            <input type="email" name="email">
            <div class="login-title">Пароль</div>
            <input type="password" name="password">
            <div class="login__btns">
                <button type="submit">Увійти</button>
                <div @click="showRegForm()">Зареєструватися</div>
            </div>
        </div>
    </form>
</template>
<script>
export default{
    emits: ['authForm', 'registerForm'],
    props: ['csrf'],
    methods: {
        closeForm()
        {
            this.$emit('authForm');
        },
        showRegForm()
        {
            this.$emit('registerForm');
        }
    }
}
</script>
