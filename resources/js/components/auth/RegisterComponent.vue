<template>
    <form action="/register" class="login-form reg" method="POST" id="registerForm">
        <input type="hidden" name="_token" :value="csrf">
        <div class="login-top">
            <div>Реєстрація</div>
            <div class="login-close" @click="closeRegForm()">×</div>
        </div>
        <div class="login-bottom">
            <div>Ім'я</div>
            <input type="text" name="name" v-model="name" >
            <div>Фамілія</div>
            <input type="text" name="surname" v-model="surname">
            <div>Електронна пошта</div>
            <input type="text" name="email" v-model="email">
            <div>Пароль</div>
            <input type="password" name="password" v-model="password">
            <div class="login__btns">
                <button type="submit">Зареєструватися</button>
            </div>
        </div>
    </form>
</template>
<script>
    export default{
        emits: ['closeRegForm'],
        props: ['csrf'],
        data(){
            return{
                name: null,
                surname: null,
                email: null,
                password: null
            }
        },
        methods:{
            closeRegForm(){
                this.$emit('closeRegForm');
            },
            register(){
                axios.post('/register', {name: this.name, surname: this.surname, email: this.email, password: this.password})
                    .then(res=>{    this.name = null
                                    this.age = null
                                    this.email = null
                                    this.password = null
                    });
            }
        }
    }
</script>


