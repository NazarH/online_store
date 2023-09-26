import './bootstrap';
import { createApp } from 'vue';
import { reactive } from 'vue';

import BannerComponent from './components/admin/banner/BannerComponent.vue';
import CategoryComponent from './components/admin/category/CategoryComponent.vue';
import ProductComponent from './components/admin/product/ProductComponent.vue';
import ProductCreateComponent from './components/admin/product/ProductCreateComponent.vue';
import ProductUpdateComponent from './components/admin/product/ProductUpdateComponent.vue';
import UserComponent from './components/admin/user/UserComponent.vue';

const adm = createApp({});
adm.component('banner-component', BannerComponent);
adm.component('category-component', CategoryComponent);
adm.component('product-component', ProductComponent);
adm.component('product-create-component', ProductCreateComponent);
adm.component('product-update-component', ProductUpdateComponent);
adm.component('user-component', UserComponent);
adm.mount('#adm');





