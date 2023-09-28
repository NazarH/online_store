<template>
  <form
    id="registerForm"
    action="/register"
    class="login-form reg"
    method="POST"
  >
    <input
      type="hidden"
      name="_token"
      :value="csrf"
    >
    <div class="login-top">
      <div>Реєстрація</div>
      <div
        class="login-close"
        @click="closeRegForm()"
      >
        ×
      </div>
    </div>
    <div class="login-bottom">
      <div>Ім'я</div>
      <input
        v-model="user.name"
        type="text"
        name="name"
      >
      <div>Фамілія</div>
      <input
        v-model="user.surname"
        type="text"
        name="surname"
      >
      <div>Електронна пошта</div>
      <input
        v-model="user.email"
        type="text"
        name="email"
      >
      <div>Пароль</div>
      <input
        v-model="user.password"
        type="password"
        name="password"
      >
      <div class="login__btns">
        <button type="submit">
          Зареєструватися
        </button>
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


