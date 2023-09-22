import './bootstrap';
import { createApp } from 'vue'

import HeaderComponent from './components/header/HeaderComponent.vue';
import FooterComponent from './components/footer/FooterComponent.vue';
import LoginComponent from './components/auth/LoginComponent.vue';
import RegisterComponent from './components/auth/RegisterComponent.vue';
import DropdownComponent from './components/auth/DropdownComponent.vue';
import IndexComponent from './components/product/IndexComponent.vue';


import BannerComponent from './components/admin/banner/BannerComponent.vue';
import CategoryComponent from './components/admin/category/CategoryComponent.vue';
import ProductComponent from './components/admin/product/ProductComponent.vue';
import ProductCreateComponent from './components/admin/product/ProductCreateComponent.vue';
import ProductUpdateComponent from './components/admin/product/ProductUpdateComponent.vue';
import UserComponent from './components/admin/user/UserComponent.vue';


/* Компоненти головної сторінки */

const app = createApp({});
app.component('header-component', HeaderComponent);
app.component('footer-component', FooterComponent);
app.component('login-component', LoginComponent);
app.component('register-component', RegisterComponent);
app.component('dropdown-component', DropdownComponent);
app.component('index-component', IndexComponent);
app.mount('#app');

/* Компоненти адмінки */

const adm = createApp({});
adm.component('banner-component', BannerComponent);
adm.component('category-component', CategoryComponent);
adm.component('product-component', ProductComponent);
adm.component('product-create-component', ProductCreateComponent);
adm.component('product-update-component', ProductUpdateComponent);
adm.component('user-component', UserComponent);
adm.mount('#adm');



