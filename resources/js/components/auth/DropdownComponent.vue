<template>
    <div class="profile-dropdown" id="profDropdown">
        <a v-if="authUser.role === 'admin'" href="/admin">Адмін-панель</a>
        <a href="/profile">Особистий кабінет</a>
        <a href="/logout" onclick="event.preventDefault();
           document.getElementById('logout-form').submit();"
        >
            Вихід
        </a>
        <form id="logout-form" action="/logout" method="POST">
            <input type="hidden" name="_token" :value="csrf">
        </form>
    </div>
</template>
<script>
    export default{
        props: ['authUser', 'csrf'],
    }
</script>
<style></style>
