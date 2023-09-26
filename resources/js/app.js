import './bootstrap';
import { createApp } from 'vue';
import { reactive } from 'vue';

import HeaderComponent from './components/header/HeaderComponent.vue';
import FooterComponent from './components/footer/FooterComponent.vue';
import LoginComponent from './components/auth/LoginComponent.vue';
import RegisterComponent from './components/auth/RegisterComponent.vue';
import DropdownComponent from './components/auth/DropdownComponent.vue';
import IndexComponent from './components/product/IndexComponent.vue';

const app = createApp({});
app.component('header-component', HeaderComponent);
app.component('footer-component', FooterComponent);
app.component('login-component', LoginComponent);
app.component('register-component', RegisterComponent);
app.component('dropdown-component', DropdownComponent);
app.component('index-component', IndexComponent);
app.mount('#app');




