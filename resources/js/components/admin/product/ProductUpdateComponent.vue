<template>
    <div class="container">
        <form action="" class="product" method="post">
            <input type="hidden" name="_token" :value="csrf">
            <div class="product__item">
                <div class="product__name">
                    Назва
                </div>
                <input name='name' type="text" :value="product.name" v-model="product.name">
            </div>
            <div class="product__item">
                <div class="product__name">
                    Код
                </div>
                <input name='code' type="text" :value="product.code" v-model="product.code">
            </div>
            <div class="product__item">
                <div class="product__name">
                    Ціна
                </div>
                <input name='price' type="text" :value="product.price" v-model="product.price">
            </div>
            <div class="product__item">
                <div class="product__name">
                    Знижка
                </div>
                <input name='discount' type="text" :value="product.discount" v-model="product.discount">
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

        <form :action="product.id + '/add-attr'" class="attributs" method="post">
            <input type="hidden" name="_token" :value="this.$csrf.token">
            <div class="attributs__item">
                <div class="attributs__text">
                    Тип
                </div>
                <input type="text" name='type' placeholder="hdd, ssd, processor, display..." v-model="attr.type">
            </div>
            <div class="attributs__item">
                <div class="attributs__text">
                    Назва
                </div>
                <input type="text" name='name' placeholder="Жорсткий диск, Твердотільний накопичувач, Дисплей..."
                    v-model="attr.name">
            </div>
            <div class="attributs__item">
                <div class="attributs__text">
                    Значення
                </div>
                <input type="text" name='value' placeholder="1TB, 500GB NVMe, 1920x1080..." v-model="attr.value">
            </div>
            <button type="submit">
                Додати новий атрибут
            </button>
        </form>
    </div>
</template>
<script>
export default {
    props: {
        attributes: String,
        product: String
    },
    data() {
        return {
            csrf: window.csrfToken,
            attr: {
                type: null,
                name: null,
                value: null
            },
            product: {
                name: this.product.name,
                code: this.product.code,
                price: this.product.price,
                discount: this.product.discount
            }
        }
    },
    methods: {
        async createAttr()
        {
            try {
                const RESPONSE = await axios.post(this.product.id + '/add-attr', {
                    attribute
                }).then(res => {
                    attribute.type = null
                    attribute.name = null
                    attribute.value = null
                });
            } catch (error) {
                console.error('Помилка при створенні атрибуту', error);
            }
        },
        async updateProduct()
        {
            try {
                const RESPONSE = await axios.post(this.product.id, {
                    product
                });
            } catch (error) {
                console.error('Помилка при оновленні продукту', error);
            }
        }
    }
}
</script>
