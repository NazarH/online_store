<template>
    <div class="container">
        <form action="" class="product" method="post">
            <input type="hidden" name="_token" :value="csrf">
            <div class="product__item">
                <div class="product__name">
                    Назва
                </div>
                <input name='name' type="text" :value="product.name" v-model="productName">
            </div>
            <div class="product__item">
                <div class="product__name">
                    Код
                </div>
                <input name='code' type="text" :value="product.code" v-model="productCode">
            </div>
            <div class="product__item">
                <div class="product__name">
                    Ціна
                </div>
                <input name='price' type="text" :value="product.price" v-model="productPrice">
            </div>
            <div class="product__item">
                <div class="product__name">
                    Знижка
                </div>
                <input name='discount' type="text" :value="product.discount" v-model="productDiscount">
            </div>

            <div v-if="attributes" v-for="attribute in attributes" class="product__item">
                <div class="product__name">
                    {{ attribute.name }}
                </div>
                <input name='value' type="text" :value="attribute.value">
            </div>

            <button type="submit">
                Оновити інформацію
            </button>
        </form>

        <form :action="product.id+'/add-attr'" class="attributs" method="post">
            <input type="hidden" name="_token" :value="csrf">
            <div class="attributs__item">
                <div class="attributs__text">
                    Тип
                </div>
                <input type="text" name='type' placeholder="hdd, ssd, processor, display..." v-model="type">
            </div>
            <div class="attributs__item">
                <div class="attributs__text">
                    Назва
                </div>
                <input type="text" name='name' placeholder="Жорсткий диск, Твердотільний накопичувач, Дисплей..."
                    v-model="name">
            </div>
            <div class="attributs__item">
                <div class="attributs__text">
                    Значення
                </div>
                <input type="text" name='value' placeholder="1TB, 500GB NVMe, 1920x1080..." v-model="value">
            </div>
            <button type="submit">
                Додати новий атрибут
            </button>
        </form>
    </div>
</template>
<script>
export default {
    props: ['attributes', 'product', 'csrf'],
    data() {
        return {
            type: null,
            name: null,
            value: null,

            productName: this.product.name,
            productCode: this.product.code,
            productPrice: this.product.price,
            productDiscount: this.product.discount
        }
    },
    methods: {
        createAttr() {
            axios.post(this.product.id+'/add-attr', {
                type: this.type,
                name: this.name,
                value: this.value
            }).then(res => {
                this.type = null
                this.name = null
                this.value = null
            });
        },
        updateProduct(){
            axios.post(this.product.id, {
                name: this.productName,
                code: this.productCode,
                price: this.productPrice,
                discount: this.productDiscount
            });
        }
    }
}
</script>
