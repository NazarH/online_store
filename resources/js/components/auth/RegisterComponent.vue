<template>
    <form action="/register" class="login-form reg" method="POST" id="registerForm">
        <input type="hidden" name="_token" :value="csrf">
        <div class="login-top">
            <div>Реєстрація</div>
            <div class="login-close" @click="closeRegForm()">×</div>
        </div>
        <div class="login-bottom">
            <div>Ім'я</div>
            <input type="text" name="name" v-model="user.name">
            <div>Фамілія</div>
            <input type="text" name="surname" v-model="user.surname">
            <div>Електронна пошта</div>
            <input type="text" name="email" v-model="user.email">
            <div>Пароль</div>
            <input type="password" name="password" v-model="user.password">
            <div class="login__btns">
                <button type="submit">Зареєструватися</button>
            </div>
        </div>
    </form>
</template>
<script>
export default {
    emits: ['closeRegForm'],
    data() {
        return {
            csrf: window.csrfToken,
            user: {
                name: null,
                surname: null,
                email: null,
                password: null
            }
        }
    },
    methods: {
        closeRegForm()
        {
            this.$emit('closeRegForm');
        },
        register()
        {
            axios.post('/register', { user })
                .then(res => {
                    user.name = null
                    user.age = null
                    user.email = null
                    user.password = null
                });
        }
    }
}
</script>


