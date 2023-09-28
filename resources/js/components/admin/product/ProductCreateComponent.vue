<template>
  <form
    action=""
    class="create-form"
    method="POST"
    enctype="multipart/form-data"
  >
    <input
      type="hidden"
      name="_token"
      :value="csrf"
    >
    <div>
      <div>
        <div class="create-form__item">
          <div>Оберіть категорію</div>
          <select name="category_id">
            <option
              v-for="category in categories"
              :value="category.id"
            >
              {{ category.name }}
            </option>
          </select>
        </div>
        <div class="create-form__item">
          <div>Назва товару</div>
          <input
            v-model="product.name"
            type="text"
            placeholder=""
            name="name"
          >
        </div>

        <div class="create-form__item">
          <div>Код товару</div>
          <input
            v-model="product.code"
            type="text"
            placeholder=""
            name="code"
          >
        </div>

        <div class="create-form__item">
          <div>Ціна</div>
          <input
            v-model="product.price"
            type="text"
            placeholder="0"
            name="price"
          >
        </div>

        <div class="create-form__item">
          <div>Знижка</div>
          <input
            v-model="product.discount"
            type="text"
            placeholder="0%"
            name="discount"
          >
        </div>

        <div class="create-form__title">
          Завантажити фото
          <input
            type="file"
            name="images[]"
            multiple
            @change="handleFileUpload"
          >
        </div>
      </div>
    </div>
    <div class="create-form__subm-block">
      <button
        type="submit"
        class="create-form__submit"
      >
        Створити
      </button>
    </div>
  </form>
</template>
<script>
export default {
    props: {
        categories: String
    },
    data() {
        return {
            csrf: window.csrfToken,
            product: {
                name: null,
                code: null,
                price: null,
                discount: null,
                images: []
            }
        }
    },
    methods: {
        handleFileUpload(event) {
            const files = event.target.files;

            for (let i = 0; i < files.length; i++) {
                product.images.push(files[i]);
            }
        },
        async createProduct() {
            try {
                const RESPONSE = await axios.post('products/create', {
                    product
                }).then(res => {
                    product.name = null
                    product.code = null
                    product.price = null
                    product.discount = null
                    product.images = []
                });
            } catch (error) {
                console.error('Помилка при створенні продукту', error);
            }
        }
    }
}
</script>
