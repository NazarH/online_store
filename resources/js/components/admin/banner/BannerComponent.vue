<template>
  <div class="container">
    <div class="banners">
      <div class="banners__top">
        <form
          id="banner-create"
          action="banners/create"
          class="banners__form-top"
          method="post"
        >
          <input
            type="hidden"
            name="_token"
            :value="csrf"
          >
          <input
            v-model="banner.text"
            type="text"
            name="text"
            placeholder="Введіть текст банеру..."
          >
          <input
            v-model="banner.banner_type"
            class="input_size"
            type="text"
            name="banner_type"
            placeholder="top / block"
          >
          <input
            v-model="banner.text_color"
            class="input_size"
            type="text"
            name="text_color"
            placeholder="#FFFFFF - text"
          >
          <input
            v-model="banner.back_color"
            class="input_size"
            type="text"
            name="back_color"
            placeholder="#000000 - back"
          >
          <input
            v-model="banner.link"
            class="input_size"
            type="text"
            name="link"
            placeholder="Ноутбуки"
          >
          <button type="submit">
            Create
          </button>
        </form>
        <table class="table table-banner">
          <tr>
            <th>Текст банеру</th>
            <th>Тип банеру</th>
            <th>Колір тексту</th>
            <th>Колір банеру</th>
            <th>Посилання</th>
            <th />
          </tr>
          <tr
            v-for="banner in banners"
            v-if="banners"
            :key="banner.id"
          >
            <td class="item-name">
              {{ banner.text }}
            </td>
            <td class="table__item">
              {{ banner.banner_type }}
            </td>
            <td class="table__item">
              {{ banner.text_color }}
            </td>
            <td class="table__item">
              {{ banner.back_color }}
            </td>
            <td class="table__item">
              {{ banner.link }}
            </td>
            <td class="">
              <form action="">
                <input
                  type="submit"
                  value="Видалити"
                >
              </form>
            </td>
          </tr>
        </table>
      </div>
      <div class="banners__main" />
    </div>
  </div>
</template>
<script>
export default {
    props: {
        banners: String
    },
    data() {
        return {
            csrf: window.csrfToken,
            banner: {
                text: null,
                banner_type: null,
                text_color: null,
                back_color: null,
                link: null
            }
        }
    },

    methods: {
        async addBanner() {
            try {
                const RESPONSE = await axios.post('/banners/create', {
                    banner
                }).then(res => {
                    banner.text = null
                    banner.banner_type = null
                    banner.text_color = null
                    banner.back_color = null
                    banner.link = null
                });
            } catch (error) {
                console.error('Помилка при створенні банера', error);
            }
        }
    }
}
</script>
