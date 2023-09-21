<template>
    <a v-if="topBanner" class="header__banner" :style="{ background: topBanner.back_color, color: topBanner.text_color }">
        {{ topBanner.text }}
    </a>
    <div class="header__menu">
        <div class="header__logo">
            <a href="/main-page">Online Store</a>
        </div>
        <div class="header__catalog" @click="visibleMenu()">
            <div>
                <img :src="server+'images/icon-apps.svg'">
                Каталог
                <ul class="content__nav" id="menu" v-show="menu">
                    <li>
                        <a href="/mobile-phones">
                            <div class="content__icon-block">
                                <img :src="server+'images/icon-mobile.svg'" alt="" class="content__icon">
                            </div>
                            <div class="content__item-text">
                                Мобільні телефони
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/televisions">
                            <div class="content__icon-block">
                                <img :src="server+'images/icon-television.svg'" alt="" class="content__icon">
                            </div>
                            <div class="content__item-text">
                                Телевізори
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/notebooks">
                            <div class="content__icon-block">
                                <img :src="server+'images/icon-laptop.svg'" alt="" class="content__icon">
                            </div>
                            <div class="content__item-text">
                                Ноутбуки
                            </div>

                        </a>
                    </li>
                    <li>
                        <a href="/books">
                            <div class="content__icon-block">
                                <img :src="server+'images/icon-books.svg'" alt="" class="content__icon">
                            </div>
                            <div class="content__item-text">
                                Книги
                            </div>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
        <form action="/pages/search" method="get" class="header__search">
            <input name='search' type="text" placeholder="Я шукаю...">
            <button type="submit">ЗНАЙТИ</button>
        </form>
        <div class="header__buttons">
            <div href="" class="header__item">
                <img :src="server+'images/icon-shopping-cart.svg'">
                <a href="/basket">Корзина</a>
            </div>
            <div v-if="authUser === null" href="" class="header__item" @click="authForm()">
                <img :src="server+'images/icon-user.svg'"> Профіль
            </div>
            <div v-else href="" class="header__item" onclick="profileFunc()">
                <img :src="server+'images/icon-user.svg'">
                {{ authUser.name + ' ' + authUser.surname }}
            </div>
        </div>
    </div>
    <template v-if="authUser === null">
        <LoginComponent
            v-show="login"
            :csrf="csrf"
            @authForm="authForm"
            @registerForm="registerForm">
        </LoginComponent>
        <RegisterComponent
            :csrf="csrf"
            v-show="register"
            @closeRegForm="closeRegForm">
        </RegisterComponent>
    </template>
    <template v-else>
        <DropdownComponent
            :authUser="authUser"
            :csrf="csrf"
        ></DropdownComponent>
    </template>
</template>
<script>
import LoginComponent from '../auth/LoginComponent.vue';
import RegisterComponent from '../auth/RegisterComponent.vue';
import DropdownComponent from '../auth/DropdownComponent.vue';

export default {

    name: 'HeaderComponent',
    data() {
        return {
            menu: false,
            login: false,
            register: false,
        }
    },
    props: ['topBanner', 'authUser', 'csrf', 'server'],
    components: {
        LoginComponent,
        RegisterComponent,
        DropdownComponent
    },
    methods: {
        visibleMenu() {
            this.menu = !this.menu;
        },
        authForm() {
            this.login = !this.login;
        },
        registerForm(){
            this.login = !this.login;
            this.register = !this.register;
        },
        closeRegForm(){
            this.register = !this.register;
        }
    }
}
</script>
<style></style>
