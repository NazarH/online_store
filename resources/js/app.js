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
app.component('HeaderComponent', HeaderComponent);
app.component('FooterComponent', FooterComponent);
app.component('LoginComponent', LoginComponent);
app.component('RegisterComponent', RegisterComponent);
app.component('DropdownComponent', DropdownComponent);
app.component('IndexComponent', IndexComponent);
app.mount('#app');




