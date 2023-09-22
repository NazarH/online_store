<template>
    <form action="" class="create-form" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" :value="csrf">
        <div>
            <div>
                <div class="create-form__item">
                    <div>Оберіть категорію</div>
                    <select name="category_id">
                        <option v-for="category in categories" :value="category.id">{{ category.name }}</option>
                    </select>
                </div>
                <div class="create-form__item">
                    <div>Назва товару</div>
                    <input type="text" placeholder="" name="name" v-model="name">
                </div>

                <div class="create-form__item">
                    <div>Код товару</div>
                    <input type="text" placeholder="" name="code" v-model="code">
                </div>

                <div class="create-form__item">
                    <div>Ціна</div>
                    <input type="text" placeholder="0" name="price" v-model="price">
                </div>

                <div class="create-form__item">
                    <div>Знижка</div>
                    <input type="text" placeholder="0%" name="discount" v-model="discount">
                </div>

                <div class="create-form__title">
                    Завантажити фото
                    <input type="file" name="images[]" multiple @change="handleFileUpload">
                </div>
            </div>
        </div>
        <div class="create-form__subm-block">
            <button type="submit" class="create-form__submit">Створити</button>
        </div>
    </form>
</template>
<script>
export default {
    props: ['categories', 'csrf'],
    data() {
        return {
            name: null,
            code: null,
            price: null,
            discount: null,
            images: []
        }
    },
    methods: {
        handleFileUpload(event)
        {
            const files = event.target.files;

            for (let i = 0; i < files.length; i++) {
                this.images.push(files[i]);
            }
        },
        createProduct()
        {
            axios.post('products/create', {
                name: this.name,
                code: this.code,
                price: this.price,
                discount: this.discount,
                images: this.images
            }).then(res => {
                this.name = null
                this.code = null
                this.price = null
                this.discount = null
                this.images = []
            });
        }
    }
}
</script>
