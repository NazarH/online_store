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
adm.component('BannerComponent', BannerComponent);
adm.component('CategoryComponent', CategoryComponent);
adm.component('ProductComponent', ProductComponent);
adm.component('ProductCreateComponent', ProductCreateComponent);
adm.component('ProductUpdateComponent', ProductUpdateComponent);
adm.component('UserComponent', UserComponent);
adm.mount('#adm');





