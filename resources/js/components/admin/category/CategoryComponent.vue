<template>
  <div class="container">
    <div class="table-attributes">
      <form
        id="banner-create"
        action="categories/create"
        class="banners__form-top"
        method="post"
      >
        <input
          type="hidden"
          name="_token"
          :value="csrf"
        >
        <input
          v-model="category.name"
          type="text"
          name="name"
          placeholder="Введіть назву категорії..."
        >
        <button type="submit">
          Створити
        </button>
      </form>
    </div>
    <table class="table">
      <tr>
        <th>Назва категорії</th>
        <th />
      </tr>
      <tr
        v-for="category in categories"
        v-if="categories"
      >
        <td class="item-name">
          {{ category.name }}
        </td>
        <td>
          <form
            action=""
            method="post"
          >
            <input
              type="hidden"
              name="_token"
              :value="csrf"
            >
            <input
              type="submit"
              value="Видалити"
            >
          </form>
        </td>
      </tr>
    </table>
  </div>
</template>
<script>
export default {
    props: {
        categories: String
    },
    methods: {
        data() {
            return {
                csrf: window.csrfToken,
                category: {
                    name: null
                }
            }
        },
        methods: {
            async createCategory() {
                try {
                    const RESPONSE = await axios.post('/categories/create', {
                        category
                    }).then(res => {
                        category.name = null
                    });
                } catch (error) {
                    console.error('Помилка при створенні категорії', error);
                }
            }
        }
    }
}
</script>
